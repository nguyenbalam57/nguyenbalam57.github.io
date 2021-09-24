function pushState(options,targetTitle,targetUrl) {
	window.history.pushState(options, targetTitle, targetUrl);
	/*get state console.log(window.history.state);*/
}
function doSearch(options) {
	if(!options) options = {};
	var url = '';
	
	$.each(options, function(k, v) {
		url += '&'+k+'='+v;
	});
	// url = url.substr(1);
	$.ajax({
		url: _BASE + 'tim-kiem'+url,
		type: 'GET',
		dataType: 'json',
		success: function(data){
			
			$('#search-body').html(data.res);
			$('#search-page').addClass('show-ajax');
			$('#search-page').html(data.page);
			_JNWEBSITE.lazyloadImage();
			
		}
	});
	
}
function searchEnter(t){
	var k = t.val();
	var url;
	if(k!=''){
		url = '&keywords='+k;
		window.location.href = _BASE + 'tim-kiem'+url;
	}else{
		alert(lang.ban_chua_nhap_tu_khoa);
	}
}
function onChangeSelect(e,p){
    $.ajax({
        url: _BASE + 'ajax/load_item.php',
        type: 'POST',
        data: {p: p},
        success: function(data){
            $(e).html(data);
        }
    });
}
