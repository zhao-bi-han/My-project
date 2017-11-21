import React, { Component } from 'react';
import PureRenderMixin from 'react-addons-pure-render-mixin';
import { connect } from 'react-redux';
import Header from '../../components/Header'
import { getDetailData } from '../../fetch/detail/detail';
import DetailComponent from '../../components/DetailComponent'
import Loading from '../../components/loading'
import Stroe from './subpage/store';
class Detail extends Component {
    constructor() {
        super();
        this.shouldComponentUpdate = PureRenderMixin.shouldComponentUpdate.bind(this);
        this.state = {
            data: []
        }
    }

    componentDidMount() {
        const id = this.props.match.params.id
        // 获取数据
        const result = getDetailData(id);

        result.then(res => {
            return res.json()
        }).then(json => {
            this.setState({
                data: json
            })

        })
    }
    // 购买处理
    buyHandle() {
        // 验证登录
        const loginFlg = this.loginCheck();
        if (!loginFlg) {  //没有登录 直接返回
            return   
        }
        // 购买流程 此处省略...

        // 跳到用户主页
        this.props.history.push('/user');
    }

    // 登录验证
    loginCheck() {
        const id = this.props.match.params.id
        const userinfo = this.props.userinfo

        if (!userinfo.username) {// 没有登录
            //跳转到登录页
            this.props.history.push('/login/' + encodeURIComponent('/detail/' + id))
            return false
        }
        return true   // 登录成功
    }

    render() {
        const id=this.props.match.params.id   // 商户的ID
        const data = this.state.data[0];
        return (
            <div className="datail">
                <Header title={"团购详情"}  />
                <Stroe id={id}  loginCheckFn={this.loginCheck.bind(this)}/>
                {this.state.data.length ?
                    <DetailComponent {...data}  buyHandle={this.buyHandle.bind(this)}  />
                    : <Loading />}
            </div>
        )
    }
}

const mapStateToProps = (state, ownProps) => {
    return {
        userinfo: state.userinfo
    }
}
const mapDispatchToProps = (dispatch, ownProps) => {
    return {
    }
}
export default connect(mapStateToProps, mapDispatchToProps)(Detail);