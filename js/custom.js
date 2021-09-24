var $window = $(window),
    $document = $(document);
$.fn.exists = function() {
    return this.length > 0;
};

_JNWEBSITE.backToTop = function(){
	if ($('#back-to-top').length) {
		var scrollTrigger = 200, // px
			backToTop = function () {
				var scrollTop = $(window).scrollTop();
				if (scrollTop > scrollTrigger) {
					$('#back-to-top').addClass('show');
				} else {
					$('#back-to-top').removeClass('show');
				}
			};
		backToTop();
		$(window).on('scroll', function () {
			backToTop();
		});
		$('#back-to-top').on('click', function (e) {
			e.preventDefault();
			$('html,body').animate({
				scrollTop: 0
			}, 700);
		});
	}
}
_JNWEBSITE.aweOwl = function() {
  	$('.owl-carousel.in-home').each( function(){
		var xs_item = $(this).attr('data-xs-items');
		var md_item = $(this).attr('data-md-items');
		var lg_item = $(this).attr('data-lg-items');
		var sm_item = $(this).attr('data-sm-items');	
		var margin=$(this).attr('data-margin');
		var dot=$(this).attr('data-dot');
		var nav=$(this).attr('data-nav');
		var height=$(this).attr('data-height');
		var play=$(this).attr('data-play');
		var loop=$(this).attr('data-loop');
		
		if (typeof margin !== typeof undefined && margin !== false) {    
		} else{
			margin = 30;
		}
		if (typeof xs_item !== typeof undefined && xs_item !== false) {    
		} else{
			xs_item = 1;
		}
		if (typeof sm_item !== typeof undefined && sm_item !== false) {    

		} else{
			sm_item = 3;
		}	
		if (typeof md_item !== typeof undefined && md_item !== false) {    
		} else{
			md_item = 3;
		}
		if (typeof lg_item !== typeof undefined && lg_item !== false) {    
		} else{
			lg_item = 3;
		}

		if (loop == 1) { loop = true; } else{ loop = false; }
		if (dot == 1) { dot = true; } else{ dot = false; }
		if (nav == 1) { nav = true; } else{ nav = false; }
		if (play == 1) { play = true; } else{ play = false; }

		$(this).owlCarousel({
			loop: loop,
			margin:Number(margin),
			responsiveClass:true,
			dots:dot,
			nav:nav,
			autoplay:play,
			autoplayTimeout:3000,
			smartSpeed: 2000,
			autoplayHoverPause:true,
			autoHeight:false,
			navText: ['‹', '›'],
			responsive:{
				0:{
					items:Number(xs_item)				
				},
				600:{
					items:Number(sm_item)				
				},
				1000:{
					items:Number(md_item)				
				},
				1200:{
					items:Number(lg_item)				
				}
			}
		})
	});
};

_JNWEBSITE.aweOwlProduct = function() {
  	$('.owl-carousel.in-product').each( function(){
		var xs_item = $(this).attr('data-xs-items');
		var md_item = $(this).attr('data-md-items');
		var lg_item = $(this).attr('data-lg-items');
		var sm_item = $(this).attr('data-sm-items');	
		var margin=$(this).attr('data-margin');
		var dot=$(this).attr('data-dot');
		var nav=$(this).attr('data-nav');
		var height=$(this).attr('data-height');
		var play=$(this).attr('data-play');
		var loop=$(this).attr('data-loop');
		
		if (typeof margin !== typeof undefined && margin !== false) {    
		} else{
			margin = 30;
		}
		if (typeof xs_item !== typeof undefined && xs_item !== false) {    
		} else{
			xs_item = 1;
		}
		if (typeof sm_item !== typeof undefined && sm_item !== false) {    

		} else{
			sm_item = 3;
		}	
		if (typeof md_item !== typeof undefined && md_item !== false) {    
		} else{
			md_item = 3;
		}
		if (typeof lg_item !== typeof undefined && lg_item !== false) {    
		} else{
			lg_item = 3;
		}

		if (loop == 1) { loop = true; } else{ loop = false; }
		if (dot == 1) { dot = true; } else{ dot = false; }
		if (nav == 1) { nav = true; } else{ nav = false; }
		if (play == 1) { play = true; } else{ play = false; }

		$(this).owlCarousel({
			loop: loop,
			margin:Number(margin),
			responsiveClass:true,
			dots:dot,
			nav:nav,
			autoplay:play,
			autoplayTimeout:3000,
			smartSpeed: 2000,
			autoplayHoverPause:true,
			autoHeight:false,
			navText: ['‹', '›'],
			responsive:{
				0:{
					items:Number(xs_item)				
				},
				600:{
					items:Number(sm_item)				
				},
				1000:{
					items:Number(md_item)				
				},
				1200:{
					items:Number(lg_item)				
				}
			}
		})
	});
};

_JNWEBSITE.slickSlide = function(){
	$('.in-slick').each( function(){
		var infinite=parseInt($(this).attr('data-infinite'));
		var dot=parseInt($(this).attr('data-dot'));
		var arrows=parseInt($(this).attr('data-arrows'));
		var speed=parseInt($(this).attr('data-speed'));
		var play=parseInt($(this).attr('data-play'));
		var responsive=parseInt($(this).attr('data-responsive'));
		var vertical=parseInt($(this).attr('data-vertical'));
		var speed=parseInt($(this).attr('data-speed'));
		var autoplaySpeed=parseInt($(this).attr('data-autoplaySpeed'));
		var scrollDefault=parseInt($(this).attr('data-scrollDefault'));
		var showDefault=parseInt($(this).attr('data-showDefault'));

		if (typeof speed !== typeof undefined && speed !== false) {    
		} else{
			speed = 300;
		}
		if (typeof autoplaySpeed !== typeof undefined && autoplaySpeed !== false) {    
		} else{
			autoplaySpeed = 2000;
		}
		if (infinite == 1) { infinite = true; } else{ infinite = false; }
		if (vertical == 1) { vertical = true; } else{ vertical = false; }
		if (responsive == 1) { responsive = true; } else{ responsive = false; }
		if (dot == 1) { dot = true; } else{ dot = false; }
		if (arrows == 1) { arrows = true; } else{ arrows = false; }
		if (play == 1) { play = true; } else{ play = false; }

		var options = {};
		if(responsive==false){
			options = {
				dots: dot,
				infinite: infinite,
				speed: speed,
				arrows: arrows,
				slidesToShow: showDefault,
				slidesToScroll: scrollDefault,
				vertical: vertical,
				autoplay: play,
				autoplaySpeed: autoplaySpeed
			};
		}else{
			options = {
				dots: dot,
				infinite: infinite,
				speed: speed,
				arrows: arrows,
				slidesToShow: showDefault,
				slidesToScroll: scrollDefault,
				vertical: vertical,
				autoplay: play,
				autoplaySpeed: autoplaySpeed,
				responsive: [{
			      breakpoint: 1024,
			      settings: {
			        slidesToShow: 3,
			        slidesToScroll: 1
			      }
			    },{
			      breakpoint: 600,
			      settings: {
			        slidesToShow: 2,
			        slidesToScroll: 1
			      }
			    },{
			      breakpoint: 480,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1
			      }
			    }]
			};
		}

		$(this).slick(options);
	});

	
}

_JNWEBSITE.lazyloadImage = function() {
  	setTimeout(function(){
		var i = $("[data-lazyload]");
		i.length > 0 && i.each(function() {
			var i = $(this), e = i.attr("data-lazyload");
			i.appear(function() {
				i.removeAttr("height").attr("src", e);
			}, {
				accX: 0,
				accY: 210
			}, "easeInCubic");
		});
		var e = $("[data-lazyload2]");
		e.length > 0 && e.each(function() {
			var i = $(this), e = i.attr("data-lazyload2");
			i.appear(function() {
				i.css("background-image", "url(" + e + ")");
			}, {
				accX: 0,
				accY: 210
			}, "easeInCubic");
		});
	},100);
};

_JNWEBSITE.addSubscribe = function(){
	if($('#subscribe-form').exists()){
		$("#subscribe-form").validate({
			rules: {
				email: {
					required: true,
					validateEmail: true,
					email: true
				}
			},
			messages: {
				email: {
					required: lang.chua_nhap_email,
					validateEmail: lang.email_chua_dung_dinh_dang,
					email: lang.email_chua_dung_dinh_dang
				}
			},
			submitHandler: function(form) {
			    var o = $('input[name=email]');
				$.ajax({
					url: 'ajax/subscribe.php',
					type: 'POST',
					dataType: 'json',
					data: {v: o.val()},
					success: function(res){
						if(res.status==200){
							alert(res.message);
							location.reload();
						}else{
							alert(res.message);
						}
						
					}
				});
			}
		});

		$.validator.addMethod("validateEmail", function (value, element) {
            return this.optional(element) || /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/i.test(value);
        }, lang.email_sai_dinh_dang);
		
	}
}

_JNWEBSITE.addContact = function(){
	if($('#contact-form').exists()){
		$("#contact-form").validate({
			rules: {
				'data[fullname]': {
					required: true
				},
				'data[email]': {
					required: true,
					validateEmail2: true,
					email: true
				},
				'data[phone]': {
					required: true,
					validatePhone: true
				},
				'data[content]': {
					required: true
				},
			},
			messages: {
				'data[fullname]': {
					required: lang.chua_nhap_ho_ten
				},
				'data[email]': {
					required: lang.chua_nhap_email,
					validateEmail: lang.email_chua_dung_dinh_dang,
					email: lang.email_chua_dung_dinh_dang
				},
				'data[phone]': {
					required: lang.chua_nhap_dien_thoai,
					validateEmail: lang.dinh_dang_dien_thoai
				},
				'data[content]': {
					required: lang.chua_nhap_noi_dung
				}
			},
			submitHandler: function(form) {
			    fomr.submit();
			}
		});

		$.validator.addMethod("validateEmail2", function (value, element) {
            return this.optional(element) || /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/i.test(value);
        }, lang.email_sai_dinh_dang);
        $.validator.addMethod("validatePhone", function (value, element) {
            return this.optional(element) || /^((09|03|07|08|05)+([0-9]{8}))+$/i.test(value);
        }, lang.dien_thoai_sai_dinh_dang);
		
	}
}

_JNWEBSITE.changeSortby = function(){
	if($('#sort-by').exists()){
		$('body').on('click', '.change-sortby', function(event) {
			event.preventDefault();
			var o = $(this);
			var h = o.data('href');
			var s = o.data('sort');
			$('.change-sortby').removeClass('active');
			o.addClass('active');
			$('.show-sort-by').html(o.text() + ' <i class="fa fa-angle-down"></i>');
			var k = $('#keywords').val();
			var href = $('input[name=href]').val();
			var ks = '';
			if(k!=''){
				ks = '&keywords='+k;
			}
			console.log(h + ks + '&sortby='+s);
			pushState({sortby: s},'',h + ks + '&sortby='+s);
			doSearch({'href':href,  'alias':h, 'keywords': ks, 'sortby': s,'p':1});
		});
		$('body').on('click', 'a.page-link', function(event) {
			event.preventDefault();
			var o = $(this);
			var l = o.attr('href');
			var h = l.split("&");
			var options = {};
			var href = $('input[name=href]').val();
			options['href'] = href;
			$.each(h,function(i,v){
				if(i!=0){
					var f = v.split("=");
					options[f[0]] = f[1];
				}
			})
			pushState(options,'',l);
			console.log(options);

			doSearch(options);
		});
	}
	
}
_JNWEBSITE.submitSearch = function(){
	$('input[role="search-input"]').keypress(function (e) {
	  if (e.which == 13) {
	    searchEnter($(this));
	  }
	});
	$('form[role=search] button').click(function (e) {
		var o = $(this).parent('form[role=search]').find('input[role="search-input"]');
	   	searchEnter(o);
	});
}
_JNWEBSITE.owlDetail = function(){
	$('.product-detail-slider').owlCarousel({
        loop: false,
        margin: 5,
        responsiveClass: true,
        items: 4,
        dots: false,
        autoplay: false,
        nav: true,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>']
    });
}
_JNWEBSITE.tabDetail = function(){

	$(".e-tabs:not(.not-dqtab)").each( function(){
		$(this).find('.tabs-title li:first-child').addClass('current');
		$(this).find('.tab-content').first().addClass('current');
		$(this).find('.tabs-title li').click(function(){
			var tab_id = $(this).attr('data-tab');
			var url = $(this).attr('data-url');
			$(this).closest('.e-tabs').find('.tabs-title li').removeClass('current');
			$(this).closest('.e-tabs').find('.tab-content').removeClass('current');
			$(this).addClass('current');
			$(this).closest('.e-tabs').find("#"+tab_id).addClass('current');
		});    
	});

}

_JNWEBSITE.addRegister = function(){
	if($('#regiter-form').exists()){
		$('#member_email').on('blur', function(event) {
			var _o = $(this);
			var _i = _o.val();
			$.ajax({
				url: _BASE + 'ajax/check_user.php',
				type: 'POST',
				dataType: 'json',
				data: { v: _i, e: 'not-exists' },
				success: function(data){
					if(data.status!=200){
						_o.addClass('error');
						if($('#member-email-error').length==0){
							_o.parent().append('<label id="member-email-error" style="display: block;" class="error">'+data.message+'</label>');
						}else{
							$('#member-email-error').css('display','block').html(data.message);
						}
					}else{
						_o.removeClass('error');
						$('#member-email-error').remove();
					}
				}
			});
			return false;
		});

		$("#regiter-form").validate({
			onfocusout: false,
			onkeyup: false,
			onclick: false,
			rules: {
				'data[email]': {
					required: true,
					email: true
				},
				'data[phone]': {
					required: true,
					validatePhone: true
				},
				'data[password]': {
			        required: true,
			        validatePassword: true
			    },
			    'data[password-confirm]': {
			        required: true,
			        equalTo: "#member_password"
			    }
			},
			messages: {
				'data[email]': {
					required: lang.chua_nhap_email,
					validateEmail: lang.email_chua_dung_dinh_dang,
					email: lang.email_chua_dung_dinh_dang
				},
				'data[phone]': {
					required: lang.chua_nhap_dien_thoai,
					validatePhone: lang.dinh_dang_dien_thoai
				},
				'data[password]': {
		          required: lang.chua_nhap_mat_khau,
		          validateEmail: lang.mat_khau_khong_dung_dinh_dang
		        },
		        'data[password-confirm]': {
		          required: lang.chua_nhap_mat_khau_xac_nhan,
		          equalTo: lang.mat_khau_khong_trung
		        }
			},
			submitHandler: function(form) {
			    fomr.submit();
			}
		});
        $.validator.addMethod("validatePhone", function (value, element) {
            return this.optional(element) || /^((09|03|07|08|05)+([0-9]{8}))+$/i.test(value);
        }, lang.dien_thoai_sai_dinh_dang);
        $.validator.addMethod("validatePassword", function (value, element) {
            return this.optional(element) || /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/i.test(value);
        }, lang.mat_khau_khong_dung_dinh_dang);
	}
}
_JNWEBSITE.addLogin = function(){
	if($('#login-form').exists()){
		$("#login-form").validate({
			onfocusout: false,
			onkeyup: false,
			onclick: false,
			rules: {
				'data[email]': {
					required: true,
					email: true
				},
				'data[password]': {
			        required: true,
			        validatePassword: true
			    }
			},
			messages: {
				'data[email]': {
					required: lang.chua_nhap_email,
					email: lang.email_chua_dung_dinh_dang
				},
				'data[password]': {
		          required: lang.chua_nhap_mat_khau
		        }
			},
			submitHandler: function(form) {
			    fomr.submit();
			}
		});
	}
}
_JNWEBSITE.addForgot = function(){
	if($('#forgot-form').exists()){
		$("#forgot-form").validate({
			onfocusout: false,
			onkeyup: false,
			onclick: false,
			rules: {
				'data[email]': {
					required: true,
					email: true
				}
			},
			messages: {
				'data[email]': {
					required: lang.chua_nhap_email,
					email: lang.email_chua_dung_dinh_dang
				}
			},
			submitHandler: function(form) {
			    fomr.submit();
			}
		});
	}
}
_JNWEBSITE.addProfile = function(){
	if($('#profile-form').exists()){
		$("#profile-form").validate({
			onfocusout: false,
			onkeyup: false,
			onclick: false,
			rules: {
				'data[address]': {
					required: true
				},
				'data[phone]': {
					required: true,
					validatePhone: true
				},
				'data[fullname]': {
					required: true
				}
			},
			messages: {
				'data[address]': {
					required: "Bạn chưa nhập địa chỉ"
				},
				'data[phone]': {
					required: lang.chua_nhap_dien_thoai,
					validatePhone: lang.dinh_dang_dien_thoai
				},
				'data[fullname]': {
		          required: lang.chua_nhap_mat_khau
		        }
			},
			submitHandler: function(form) {
			    fomr.submit();
			}
		});
        $.validator.addMethod("validatePhone", function (value, element) {
            return this.optional(element) || /^((09|03|07|08|05)+([0-9]{8}))+$/i.test(value);
        }, lang.dien_thoai_sai_dinh_dang);
	}
}
_JNWEBSITE.addResetPassword = function(){
	if($('#reset-password-form').exists()){
		$("#reset-password-form").validate({
			onfocusout: false,
			onkeyup: false,
			onclick: false,
			rules: {
				'data[password-old]': {
			        required: true,
			        validatePassword: true
			    },
				'data[password]': {
			        required: true,
			        validatePassword: true
			    },
			    'data[password-confirm]': {
			        required: true,
			        equalTo: "#member_password"
			    }
			},
			messages: {
				'data[password-old]': {
		          required: lang.chua_nhap_mat_khau_cu,
		          validateEmail: lang.mat_khau_khong_dung_dinh_dang
		        },
				'data[password]': {
		          required: lang.chua_nhap_mat_khau,
		          validateEmail: lang.mat_khau_khong_dung_dinh_dang
		        },
		        'data[password-confirm]': {
		          required: lang.chua_nhap_mat_khau_xac_nhan,
		          equalTo: lang.mat_khau_khong_trung
		        }
			},
			submitHandler: function(form) {
			    fomr.submit();
			}
		});
        $.validator.addMethod("validatePassword", function (value, element) {
            return this.optional(element) || /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/i.test(value);
        }, lang.mat_khau_khong_dung_dinh_dang);
	}
}
_JNWEBSITE.addAddress = function(){
	if($('#address-form').exists()){
		$("#address-form").validate({
			rules: {
				'data[address]': {
					required: true
				},
				'data[phone]': {
					required: true,
					validatePhone: true
				},
				'data[fullname]': {
					required: true
				},
				'data[id_city]': {
					required: true
				},
				'data[id_dist]': {
					required: true
				},
				'data[id_ward]': {
					required: true
				}
			},
			messages: {
				'data[address]': {
					required: lang.chua_nhap_ho_ten
				},
				'data[phone]': {
					required: lang.chua_nhap_dien_thoai,
					validatePhone: lang.dinh_dang_dien_thoai
				},
				'data[fullname]': {
		          required: lang.chua_nhap_mat_khau
		        },
				'data[id_city]': {
		          required: lang.chua_chon_tinh_thanh
		        },
				'data[id_dist]': {
		          required: lang.chua_chon_quan_huyen
		        },
				'data[id_ward]': {
		          required: lang.chua_chon_phuong_xa
		        }
			},
			submitHandler: function(form) {
			    fomr.submit();
			}
		});
        $.validator.addMethod("validatePhone", function (value, element) {
            return this.optional(element) || /^((09|03|07|08|05)+([0-9]{8}))+$/i.test(value);
        }, lang.dien_thoai_sai_dinh_dang);
	}
}
_JNWEBSITE.checkDefaultAddress = function(){
	$('body').on('click', '.check-default', function(event) {
		event.preventDefault();
		var _o = $(this);
		var id = _o.data('id');
		var val = _o.data('val');
		var user = _o.data('user');
		var d = {
			id: id,
			val: val,
			user: user
		};
		$.ajax({
			url: 'ajax/check_default_address.php',
			type: 'POST',
			data: d,
			success: function(da){
				if(da==200){
					location.reload();
				}
			}
		});
	});
}
_JNWEBSITE.collapsedFooter = function(){
	$('body').on('click', '.collapsed', function(event) {
		event.preventDefault();
		var _o = $(this);
		if(_o.hasClass('active')){
			_o.removeClass('active');
			_o.parents('.widget-ft').find('.collapse').stop().slideUp();
		}else{
			_o.addClass('active');
			_o.parents('.widget-ft').find('.collapse').stop().slideDown();
		}
	});
}
_JNWEBSITE.listDatatable = function(){
	if($('.list-table').length){
		$('.list-table').DataTable({
	        searching: true,
	        ordering: true,
	        responsive: true,
	        scrollX: true,
	        pageLength: 25,
	        lengthChange: true,
	        lengthMenu: [
	            [10, 25, 50, 100, 200, -1],
	            [10, 25, 50, 100, 200, "All"]
	        ],
	        language: {
	            "decimal": "",
	            "emptyTable": lang.khong_co_du_lieu_trong_bang,
	            "info": lang.bat_dau + " _START_ " + lang.den + " _END_ " + lang.cua + " _TOTAL_ " + lang.muc,
	            "infoEmpty": lang.hien_thi + " 0 " + lang.den + " 0 " + lang.cua + " 0 " + lang.muc,
	            "infoFiltered": "(" + lang.duoc_loc_tu + " _MAX_ " + lang.tong_so_muc + ")",
	            "infoPostFix": "",
	            "thousands": ",",
	            "lengthMenu": lang.hien_thi + " _MENU_ " + lang.muc,
	            "loadingRecords": "Loading...",
	            "processing": "Processing...",
	            "search": lang.search + ":",
	            "zeroRecords": lang.khong_tim_thay_ket_qua,
	            "paginate": {
	                "first": lang.dau,
	                "last": lang.cuoi,
	                "next": lang.truoc,
	                "previous": lang.sau
	            },
	            "aria": {
	                "sortAscending": ": " + lang.kich_hoat_cot_tang_dan,
	                "sortDescending": ": " + lang.kich_hoat_cot_giam_dan
	            }
	        }
	    });
	}
}

_JNWEBSITE.menuMobile = function(){
	$('body').on('click', 'span.btn-dropdown-menu', function() {
		var o = $(this);
		if(!o.hasClass('active')){
			o.addClass('active');
			o.next('.sub-menu').stop().slideDown(300);
		}else{
			o.removeClass('active');
			o.next('.sub-menu').stop().slideUp(300);
		}
	});	
	$('.menu-mobile').click(function(e){
		e.preventDefault();
		e.stopPropagation();
		$('.header-left-fixwidth').toggleClass('open-sidebar-menu');
		$('.opacity-menu').toggleClass('open-opacity');
	});
	$('.opacity-menu').click(function(e){
		$('.open-menu-header').removeClass('open-button');
		$('.header-left-fixwidth').removeClass('open-sidebar-menu');
		$('.opacity-menu').removeClass('open-opacity');
	});
}
_JNWEBSITE.changeNganHang = function(){
	if($('.selectnganhang').length > 0){
		$('body').on('change', '.selectnganhang', function(event) {
	      var i = $(this).val();
	      $('.taikhoan').addClass('d-none');
	      $('.taikhoan'+i).removeClass('d-none');
	    });
	    $('.selectnganhang').trigger('change');
	}
	if($('.xemthem-chitiet').length > 0){
		$('body').on('click', '.xemthem-chitiet', function(event) {
			event.preventDefault();
			if($(this).hasClass('active')){
				$('.mobile-menu').stop().slideUp(200);
				$(this).removeClass('active');
			}else{
				$('.mobile-menu').stop().slideDown(400);
				$(this).addClass('active');
			}
		});
	}
}
	
$document.ready(function() {
    
	_JNWEBSITE.collapsedFooter();
	_JNWEBSITE.checkDefaultAddress();
	_JNWEBSITE.addAddress();
	_JNWEBSITE.addResetPassword();
	_JNWEBSITE.addProfile();
	_JNWEBSITE.addForgot();
	_JNWEBSITE.addLogin();
	_JNWEBSITE.addRegister();
	_JNWEBSITE.listDatatable();
	_JNWEBSITE.addContact();
	_JNWEBSITE.submitSearch();
	_JNWEBSITE.tabDetail();
	_JNWEBSITE.changeSortby();
	_JNWEBSITE.addSubscribe();
	_JNWEBSITE.backToTop();
	_JNWEBSITE.lazyloadImage();
	_JNWEBSITE.owlDetail();
  	_JNWEBSITE.aweOwl();
  	_JNWEBSITE.aweOwlProduct();
  	_JNWEBSITE.slickSlide();
  	_JNWEBSITE.menuMobile();
  	_JNWEBSITE.changeNganHang();
    
	
});
