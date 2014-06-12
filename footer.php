				<?php hybrid_get_sidebar( 'primary' ); // Loads the sidebar/primary.php template. ?>

			</div><!-- #main -->

			<?php hybrid_get_sidebar( 'subsidiary' ); // Loads the sidebar/subsidiary.php template. ?>

		</div><!-- .wrap -->

		<footer <?php hybrid_attr( 'footer' ); ?>>

			<div class="wrap">
                <div class="blogo">
                    <a href="http://kmamicro.cafe24.com" title="기상청 마이크로사이트" rel="home" class="img-hyperlink"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/blogo.png" alt=""/></a>
                </div>
                
                <div class="bottomInfo">
		        <?php hybrid_get_menu( 'mfooter' ); // Loads the menu/primary.php template. ?>
                <div class="wrap">
                우. 156-720 서울시 동작구 여의대방로 16길 61 대표전화 (02) 2181-0900 (평일 9:00~18:00, 야간휴일은 당직실 연결)<br />                본 홈페이지에 게시된 이메일 주소가 자동 수집되는 것을 거부하며, 이를 위반시 정보통신망법에 의해 처벌됨을 유념하시기 바랍니다.<br />
                </div>
                <div class="wrap">
                    Copyright &copy; 2014 KMA. All Rights Reserved. E-mail: webmasterkma@korea.kr
                </div>
                </div>
                <div class="fRight">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/call131.png" alt="기상 콜센터 전국 국번없이 131"/>
                </div>
			</div><!-- .wrap -->

		</footer><!-- #footer -->
	</div><!-- #container -->

	<?php wp_footer(); // WordPress hook for loading JavaScript, toolbar, and other things in the footer. ?>

</body>
</html>