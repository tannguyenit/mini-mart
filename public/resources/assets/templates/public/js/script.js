(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id; js.type = 'text/javascript'; js.async = true;
js.src = "https://productsrecommend.bizwebapps.vn/assets/js/popup-script.min.js?v=2.0";
fjs.parentNode.insertBefore(js, fjs.nextSibling);
}(document, 'script', 'product-recommend-app-jssdk'));
var BizwebProductRecommendApp = BizwebProductRecommendApp || {};
BizwebProductRecommendApp.domain = 'https://productsrecommend.bizwebapps.vn/';
BizwebProductRecommendApp.popupConfig = '{"position":"br","style":"vertical","Display":false,"DisplayInPageCart":false,"DisplayInDetailsProduct":false}';
