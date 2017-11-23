import React, { Component } from 'react';
import PureRenderMixin from 'react-addons-pure-render-mixin';
import { connect } from 'react-redux'
import { bindActionCreators } from 'redux';
import StoreComponent from '../../../components/Store';
import * as storeActionsFromFile from '../../../actions/store'
class Store extends Component {
    constructor() {
        super();
        this.shouldComponentUpdate = PureRenderMixin.shouldComponentUpdate.bind(this);
        this.state = {
            isStore: false
        }
    }
    // 接受的参数id  loginCheckFn

    componentDidMount() {
         this.checkStore();
    }

    // 检查商品是否被收藏
    checkStore() {
        const id = this.props.id;
        const store = this.props.store;
        let flag = store.some(item => item.id === id)   // 如果有商品被收藏 则返回true
        if (flag) {
            this.setState({
                isStore: true
            })
        }
    }


    // 收藏事件处理
    storeHandle() {
        // 检查登录
        const loginCheckFn = this.props.loginCheckFn;
        const loginFlg = loginCheckFn();
        if (!loginFlg) {
            return
        }
        // 点击收藏按钮操作
        const storeActions=this.props.storeActions;
        const id = this.props.id;
       if(this.state.isStore){   // 已经被收藏
            // 已经收藏，则取消收藏
            storeActions.remove(id)
       }else{
           storeActions.add(id)
       }
       //修改状态
       this.setState({
           isStore:!this.state.isStore
       })
    }


    render() {
        return (
            <StoreComponent isStore={this.state.isStore} storeHandle={this.storeHandle.bind(this)} />
        )
    }
}
const mapStateToProps = (state, ownProps) => {
    return {
        userinfo: state.userinfo,
        store: state.store
    }
}
const mapDispatchToProps = (dispatch, ownProps) => {
    return {
        storeActions: bindActionCreators(storeActionsFromFile, dispatch)
    }
}

export default connect(mapStateToProps, mapDispatchToProps)(Store);