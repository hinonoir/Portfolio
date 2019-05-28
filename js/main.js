$( function() {

	// ヘッダーの高さ分だけコンテンツを下げる
	var height = $( 'header' ).height();
	$( '.content' ).css( 'margin-top', height );

	// Edge,IEシリーズのみナイススクロールを適用.
	var agent = window.navigator.userAgent.toLowerCase();
	if (
		-1 !== agent.indexOf( 'edge' ) ||
		-1 !== agent.indexOf( 'msie 9.' ) ||
		-1 !== agent.indexOf( 'trident/7' )
	) {

		// ナイススクロール
		$( 'body' ).niceScroll({
			cursorcolor: '#222',
			background: '#808080',
			cursorwidth: '14px',
			cursorborderradius: '0',
			zindex: '1001',
			scrollspeed: 10,
			mousescrollstep: 20
		});

		// ウィンドウサイズが変わった際に調整する
		$( 'body' )
			.getNiceScroll()
			.resize();
	}

	// スムーススクロール //
	$( 'a[href^="#"]' ).click( function() {

		// スクロールの速度
		var speed = 400;
		var href = $( this ).attr( 'href' );
		var target = $( '#' == href || '' == href ? 'html' : href );
		var position = target.offset().top - 20;
		$( 'body,html' ).animate({ scrollTop: position }, speed, 'swing' );
		return false;
	});

	// ドロワーメニュー （toggle） //
	$( '.menu-btn' ).on( 'click', function() {
		$( '.drawer-nav' ).toggleClass( 'active' );
		$( '.menu-btn' ).toggleClass( 'toggle' );
	});

	// ドロワーメニュー（内部リンククリックで閉じる） //
	$( '.drawer-menu li a' ).on( 'click', function() {
		$( '.drawer-nav' ).removeClass( 'active' );
		$( '.menu-btn' ).removeClass( 'toggle' );
	});

	// ドロワーメニュー（画面外クリックで閉じる） //
	$( document ).on( 'click touchend', function( event ) {
		if ( ! $( event.target ).closest( '.drawer-nav' ).length ) {
			$( '.drawer-nav' ).removeClass( 'active' );
			$( '.menu-btn' ).removeClass( 'toggle' );
		}
	});

	// Lightbox //
	lightbox.option({
		resizeDuration: 200,
		wrapAround: true,
		alwaysShowNavOnTouchDevices: true
	});

	// 二重送信防止(アラート) //
	var set = 0;
	$( '.send-form' ).on( 'submit', function() {

		// 送信しているか判定
		if ( 0 == set ) {

			// 確認ダイアログ
			if ( confirm( 'この内容で送信します。' ) ) {

				// OKで送信&送信した扱いにする。
				set = 1;
				$( this )
					.find( 'input:submit' )
					.val( '送  信  中  …' );
			} else {

				// キャンセルで送信を中止
				return false;
			}
		} else {

			// 送信中に送信ボタンをクリックしたらアラート表示
			alert( 'ただ今処理中です。\nそのままお待ちください。' );
			return false;
		}
	});

	// メインビジュアルをフェードインさせる //
	$( '.mv-box h2' ).animate(
		{
			opacity: 'show',
			bottom: 0
		},
		800
	);

	// 確認画面ではヘッダーのリンクを消す。 //
	var url = location.pathname;
	if ( '/portfolio/confirm.php' == url ) {

		// リンクを削除して要素を書き換え //
		$( '.header-logo' )
			.empty()
			.append( 'Hino Portfolio' );

		// ナビを削除 //
		$( '#nav' ).remove();

		// メニューボタンを削除 //
		$( '.menu-btn' ).remove();

		// ホバー時のopacityを初期値に //
		$( '.header-logo' ).hover( function() {
			$( this ).css({ opacity: '1', cursor: 'default' });
		});
	}

	// メール送信完了のモーダル
	var mailComp = $( '.mailComp' ).val();
	if ( 1 == mailComp ) {

		// 遅らせて表示
		setTimeout( function() {
			$( '.modal-screen' ).animate(
				{
					opacity: 'show',
					margin: '140px auto 0 auto'
				},
				200
			);
		}, 500 );
	}

	// モーダルを閉じるボタン
	$( '.close-btn' ).on( 'click', function() {
		$( '.modal-screen' ).animate(
			{
				opacity: 'hide',
				margin: '160px auto 0 auto'
			},
			200
		);
	});
});
