// 获取元素
var getByClass = function (element) {
    return document.getElementsByClassName(element);
}
// 添加classs
var addClass = function (element, _className) {
    var baseClass = element.getAttribute("class");
    if (baseClass == null) {
        element.setAttribute("class", _className)
    } else if (baseClass.indexOf(_className) === -1) {
        element.setAttribute("class", baseClass + ' ' + _className)
    }
}
//移除class
var removeClass = function (element, _className) {
    var baseClass = element.getAttribute("class");
    if (baseClass == null) {
        return
    } else if (baseClass.indexOf(_className) !== -1) {
        element.setAttribute("class", baseClass.split(_className).join(" ").replace(/\s+/g, ' '))
    }

}

/*动画设置 */
window.onload = function () {
    // 获取元素
    var navItemElement = getByClass("header-nav")[0].getElementsByTagName('a');
    var sliderItemElement = getByClass("slider")[0].getElementsByTagName('a');

    // 元素初始化
    for (var i = 1; i <= 5; i++) {
        animateInit(i)
    }
   // 显示第一屏动画
    setTimeout(function () {
        animateDone(1)
    }, 500);

    // 导航点击
    navClickTo(navItemElement)

    //右侧边栏
    navClickTo(sliderItemElement)

// 滚动
    window.onscroll = function () {
        var timeout;
        if (timeout) {
            clearTimeout(timeout)
        }
        timeout = setTimeout(() => {
            var top = document.body.scrollTop;

            // 头部导航
            var navElement = getByClass('header')[0];
            if (top > 80) {
                addClass(navElement, 'header-active');
            } else {
                removeClass(navElement, 'header-active');
                switchNavItemActive(navItemElement,0);
                switchNavItemActive(sliderItemElement,0)
            }
            // 右侧边
            var sliderElement = getByClass("slider")[0];
            if (top > 400) {
                addClass(sliderElement, "slider-animate-show")
            } else {
                removeClass(sliderElement, "slider-animate-show")
            }

            // 每瓶动画
            if (top > 570 ) {
                // 第二屏动画
                animateDone(2);
                switchNavItemActive(navItemElement,1);
                switchNavItemActive(sliderItemElement,1)
            }
            if (top > 1238) {
                // 第三屏动画
                animateDone(3);
                switchNavItemActive(navItemElement,2);
                switchNavItemActive(sliderItemElement,2);
            }
            if (top > 2463) {
                // 第四屛动画
                animateDone(4);
                switchNavItemActive(navItemElement,3);
                switchNavItemActive(sliderItemElement,3)
            }
            if (top > 3300) {
                //第五屏动画
                animateDone(5);
                switchNavItemActive(navItemElement,4);
                switchNavItemActive(sliderItemElement,4);
            }
        }, 50)

    }
      // 动画初始化
      function animateInit(index) {
        addClass(getByClass(`screen-${index}-head`)[0], `screen-${index}-head-animate-init`)
        addClass(getByClass(`screen-${index}-subhead`)[0], `screen-${index}-subhead-animate-init`)
    }

    // 动画完成
    function animateDone(index) {
        getByClass(`screen-${index}-head`)[0].style.visibility = 'visible';
        getByClass(`screen-${index}-subhead`)[0].style.visibility = 'visible';

        addClass(getByClass(`screen-${index}-head`)[0], `screen-${index}-head-animate-done`)
        addClass(getByClass(`screen-${index}-subhead`)[0], `screen-${index}-subhead-animate-done`)
    }
  

    // 菜单点击跳转到指定位置
    function navClickTo(element) {
        for (let i = 0; i < element.length; i++) {
            element[i].onclick = function () {
                // 除去active class
                for (let i = 0; i < element.length; i++) {
                    removeClass(element[i], "active");
                }
                // 给导航添加class
                addClass(element[i], "active");
                // 点击跳转到默认位置
                if (i == 0) {
                    document.body.scrollTop = 0;
                } else if (i == 1) {
                    document.body.scrollTop = 628;
                } else if (i == 2) {
                    document.body.scrollTop = 1458;
                } else if (i == 3) {
                    document.body.scrollTop = 2464;
                } else {
                    document.body.scrollTop = 3361;
                }
            }
        }
    }
    // 滚动到哪 菜单就定位到哪
    function switchNavItemActive(element, index) {
        // 除去active class
        for (let i = 0; i < element.length; i++) {
            removeClass(element[i], "active");
        }
        // 给导航添加class
        addClass(element[index], "active");
    }

}
