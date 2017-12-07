import React,{Component} from 'react';
import Header from '../Header'
import {Row,Col,Upload, Icon, message} from 'antd';


function getBase64(img, callback) {
    const reader = new FileReader();
    reader.addEventListener('load', () => callback(reader.result));  //reader.result  图片路径
    reader.readAsDataURL(img);
  }
  
  function beforeUpload(file) {
    const isJPG = file.type === 'image/png';
    if (!isJPG) {
      message.error('图片格式不正确，只支持 png 格式');
    }
    const isLt2M = file.size / 1024 / 1024 < 2;
    if (!isLt2M) {
      message.error('图片太大了');
    }
    return isJPG && isLt2M;
  }
  
  class UploadComponent extends Component {
    constructor(){
        super()
        this.state = {
            loading: false,
          };
    }
    handleChange(info){
      if (info.file.status === 'uploading') {
        this.setState({ loading: true });
        return;
      }
      if (info.file.status === 'done') {
        getBase64(info.file.originFileObj, imageUrl =>{
            this.setState({
                imageUrl,
                loading: false,
              })
              this.props.uploadSuccess(imageUrl);
        });
      }
    }
    render() {
      const uploadButton = (
        <div>
          <Icon type={this.state.loading ? 'loading' : 'plus'} />
          <div className="ant-upload-text">上传</div>
        </div>
      );
      const imageUrl = this.state.imageUrl;
      return (
        <Upload
          name="avatar"
          listType="picture-card"
          className="avatar-uploader"
          showUploadList={false}
          action="/api/upload"
          beforeUpload={beforeUpload}
          onChange={this.handleChange.bind(this)}
        >
          {imageUrl ? <img src={imageUrl} alt="" /> : uploadButton}
        </Upload>
      );
    }
  }
  

export default UploadComponent