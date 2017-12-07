import React, { Component } from 'react';
import Header from '../Header'
import Comment from '../../../containers/common/comment'
import Footer from '../../PC/Footer'
import Store from '../../../containers/common/store'
import './style.less'

class DetailComponent extends Component {
    createMarkUp() {
        return { __html: this.props.content }

    }
    render() {
        const { title } = this.props
        return (
            <div className="mb-detail">
                <Header />
                <div className="detail-container">
                    <h1>{title}</h1>
                    <div className="content" dangerouslySetInnerHTML={this.createMarkUp()}></div>
                    <div className="article-end">
                        <span className="end">THE END</span>
                        <div>
                            <a href="javascript:;"><i className="iconfont icon-zan"></i></a>
                            {/*收藏*/}
                            <Store articleId={1} />
                        </div>

                    </div>
                </div>
                <Comment />
                <Footer />
            </div>
        )
    }
}

export default DetailComponent;