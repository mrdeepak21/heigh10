<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class CTA_1 extends Widget_Base {
	
	public function get_name() {
		return 'call-to-action1';
	}
	
	public function get_title() {
		return 'CTA 1';
	}
	
	public function get_icon() {
		return 'eicon-image-rollover';
	}
	
	public function get_categories() {
		return [ 'basic' ];
	}
	
	protected function register_controls() {

		$this->start_controls_section(
			'section_title',
			[
				'label' => __( 'Content', 'elementor' ),
			]
		);
		
		$this->add_control(
			'title',
			[
				'label' => __( 'Title', 'elementor' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your title', 'elementor' ),
			]
		);

		$this->add_control(
			'btn_text',
			[
				'label' => __( 'Button Text', 'elementor' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter button text', 'elementor' ),
			]
		);

		$this->add_control(
			'btn_link',
			[
				'label' => __( 'Button link', 'elementor' ),
				'type' => Controls_Manager::URL,
				'placeholder' => __( 'https://your-link.com', 'elementor' ),
				'default' => [
					'url' => '',
				]
			]
		);

		$this->end_controls_section();
	}
	
	/**
	 * Render list widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */

	protected function render() {
        $settings = $this->get_settings_for_display();
        $url = $settings['btn_link']['url'];
		?>
        <section data-w-id="b1610442-27d1-5dc9-fbb1-9b384f7af97f" class="l-section cc--dark wf-section">
    <div class="c-grid-wrapper">
        <div class="w-layout-grid c-your-brand__grid">
            <div class="c-your-brand__graphic">
                <div class="c-your-brand__gradient-overlay">                    
                </div>
                <div data-w-id="ad71be2e-72e9-ccd6-e0f3-162960fec76c" data-is-ix2-target="1" class="c-grpahic-temp"
                    data-animation-type="lottie"
                    data-src="https://assets-global.website-files.com/5c51b8093dcfd38165099093/6182dc5cb1831c8dc2a07d43_Vovi%20web%20anim%20d1.json"
                    data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg"
                    data-default-duration="14.116666666666667" data-duration="0"><svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 2000 2000" width="2000" height="2000" preserveAspectRatio="xMidYMid meet"
                        style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px);">
                        <defs>
                            <clipPath id="__lottie_element_13">
                                <rect width="2000" height="2000" x="0" y="0"></rect>
                            </clipPath>
                            <image
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADQAAAAqBAMAAAAOimUzAAAAJHpUWHRDcmVhdG9yAAAImXNMyU9KVXBMK0ktUnBNS0tNLikGAEF6Bs5qehXFAAAACXBIWXMAAAABAAAAAQBPJcTWAAAAJFBMVEVHcEz///////////////////////////////////////////8Uel1nAAAAC3RSTlMA3SB8mVsQ77dAMKatPnEAAAFISURBVDjLfZQ9T8NADIYv0EYtU4RElyyBpUgs3RiyRKxd2FmKOrCD1CULQmxdyszC3qkfKID/HD3HZ5/vAl7s8xv5nrNzZ8z/lq6CxLBw0fUokJInCt5gF0glnKG/BGgKpRzlAC8HP4eDPSupZ1M3Jq2t/1bSlU1tjFmS9yyn1Np6mHhKHzNbKgwLTzrHTGVos71Ct/UKF8GHoOMaj5qAxm93yLBhGH6ydIfrW4xb/JlCp73HCv/YocviUaHThymW+CJpyuiy8cpDZ6iB4NJRMiedyCGpgswP6zczmqJq24NrKNGeitQmftwU1YgYfxoN9p361g/6yfgjQq/U71W3+GWAzpNtLnI5INs9fv4aostfBN4UxZasbMKLtGZpG0o9lqro+tWuXhFdzZKkXXxrE5KyWBr+gS74+653YNyNLvOcdL4euUb/Bbk3G0wq86+LAAAAAElFTkSuQmCC">
                            </image>
                            <image
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAG0AAAAgBAMAAADqEOvXAAAAJHpUWHRDcmVhdG9yAAAImXNMyU9KVXBMK0ktUnBNS0tNLikGAEF6Bs5qehXFAAAACXBIWXMAAAABAAAAAQBPJcTWAAAAKlBMVEVHcEz///////////////////////////////////////////////////+LBpLMAAAADXRSTlMAfzzfZcMf758Qr49Qpb6C7gAAAnNJREFUOMvtlM9rE1EQxycxpk0lsIWi9BAI/jgGAml7C6xK/YEGQjUWDwtbFAWxIJT2Figt2CgE9lJPCr14DNSL6KHQgwcvBdNtTLF8/xdn5r1NdlMRevDmQps38+bz3vfNzHv0vbVPZ/2+tHwqwDkzV0XxP/cPuNy3qeLQ+yzgf++vx1xXB2MTabm0B/Rfi/tmxc1dQp3oRRMIp9mTqczQNZ7+qphEhp8jrgb5RC4bV8Bcpime0CdKoZuKxpTrmKHhJoEVjusqd6sqXAGYXQTmlDtApSlOoidMrQBrhuv0L1K6DbjC3cFqazcLLLBo9JSrTlO6qst6CO9yaNhUTpalbBVrwhVOOCvj+CUumU6hd8TjbVkjA7yRI/Puwql0eo4T4TzelfKyhlg7zGFdEgL4dE6XI6oZ7kiNDPoBG8cyLjHA3zLKwhVNyVw6wE8NnTBc2VTGiNaZpUm9k3n8YC7U6TZzbd1aN5fQXbIzDhv1WFsYzmjb41kP+/F+sUaNVysYgZKUe28fQDlVrm1lJRN1lCtG3M6wWZe08Mp1YxxF0hJcfcBxqlc/3S/9nXPjOh17mpkgOl+c8+M6E3lxTE3CgE5z1WReyqcu43kcys+HEa5ts2brcBjVnSIuj1dGeZIr2bqPJ/vseMAtG25xhBtDL4j1mfZ12va1cmOqITXL68c57utHqsxwHjaCl569R/Z8rCG3Nz/CcR7DjeCpF5pUTGmJ7b117MF7k1u9Cd42wW2byDmbwtti9N0hR+p5fIGvSoLjug7eifmGm920j5AYpjs30V+gTOOh/g1nslusxKGPDdtjl2/4I0/kO//PT2cU+RvNA6Ie3jlVUgAAAABJRU5ErkJggg==">
                            </image>
                            <image
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJoAAAAhBAMAAADT3K+SAAAAJHpUWHRDcmVhdG9yAAAImXNMyU9KVXBMK0ktUnBNS0tNLikGAEF6Bs5qehXFAAAACXBIWXMAAAABAAAAAQBPJcTWAAAALVBMVEVHcEz////////////////////////////////////////////////////////NXt0CAAAADnRSTlMA38JEH19/nxDvb48wr1CZNToAAAO7SURBVEjHxZbNaxNbGIdPMlMb03oxrlzIEEfl6lWHoBWkQulCqasStAFxEYJg/UBKcCuWaFe6kOrK1aCIgiLFhXdxEUpAXbgRF7pwU0jaxjvG/v4G348zU6dWFyXgLJJzzpzzvN/vGWM29OSGNnTsyeToestzqG2E5qG0zqoLLPaO5gCd3tEGe6qbmUaRftHqDc05b3pI0+fP0HJHTjcTWu714Ua8Pnx5aD3aicpR+T/kF8URvi9KbPF30W9fALTOWJqzD2iX1V20jgM0OOXXcr6PyPd5lrtEy3t4wx2NdT9Q5//3WKIE8OgtWk2lzctESmKKh1wGU6i7MpbTT2W0m0ZZdHlfBpjVkiFV3wF/XwWWhXZMT+1glYF/zgacuCnaJuDedU8E5hExZcTmY4CycUO2ZgxRk2lBdKXxVvfeYAFOSK4kWq5SQVSpTDC60zCOh+1kcyhRm0fY1QIcJT07atZWpmGvEfFFFlkXwUWmJVGgMyXxVUe0ecEWtQPWMY8VY6qS6GaANfHQNopeZJEl8c3/KVo/vkq4vajBomaZvzzHW7NMCCAuzzHI46gI4gvXU1kkfkvRxtmGuEvdYql5LN3hyTihXasOURtEq9uuEbGCrLT75mSKVhXjODuK1t4silmeVGmXw9Yao4YltRCSwiNY0ZxO0Rbslgwb6fDaOB7kyR2kTok8vlKRZ4EM89CIFS2RTLQ+ja6lBfhXtp8Sp3BQq2i65EyX3w8geWpES3oQpQ5ndWtiDc1Lti+JQTWzQOtBm9LzS4r2wHjRDzSTF1z5dzTOH062KTSymtrd4/ZprOoWiHecc3To61pLh+x2dsJmLDlMGUFZgi0K/tSR4sHMNNBM0aZTTWsTOv1MyaAuwXZ/bFueveroJqAMZOHkvBcp2pzNkPgCamf45QBmAzQTo4z5fJBp940mfJtCOqv59SGmQfNMt/y1raaGj/B5B8uxsKLWn9RC1yb6MhEXTapOQ1tpehtWpVLoVSiRC1tacRkl3NQ6FVP7QvKFo0VSTSwNSEu5XBkzGGpBjkP9Pq8xZh99NNxipIcE1IRnAu4t6kTyWxyFKbSevZSONMr9t2MrOjZBTSTp2H9BW5qHQ8BdaOt8h9ajI/+hG2fIDc0xalftV59t86aS56LiVFHLbSeX1uzh6IJ08tLqej2m8fxb0uC79iIqFD5IQysU7AfRbS++NnYWSn00iS7K+lho1x8WJCvGPOnwLuUg7v36qhx8MjmxOhl+HH92zVy49jx1U9oXw5OPuDt8B/hGhJ3mnQJ8AAAAAElFTkSuQmCC">
                            </image>
                            <image
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAG8AAAAhBAMAAAAluehPAAAAJHpUWHRDcmVhdG9yAAAImXNMyU9KVXBMK0ktUnBNS0tNLikGAEF6Bs5qehXFAAAACXBIWXMAAAABAAAAAQBPJcTWAAAAKlBMVEVHcEz///////////////////////////////////////////////////+LBpLMAAAADXRSTlMAZL0fRH/fn+8QjzDPB3pyLQAAAtJJREFUOMulVc9rU0EQ3uS9JCRRiBqlGAKxoL0kkKK0kBpIqChSCoKH6iHQam0ReVCiklLIwRZPGniHtIhQSBUPHgJVRLwEvHnKwWebPEvmf3Fmdt+PCGqJe3iZ3Z1vdna+bzZC/HtEz5bESGMHDofm4+PHBKYB8v45wDGBFYDSSMB5sM2RgDF4JkYCiivmiMDfxv8Dy9WJM8psLtSSLu/l2tObPv/mwkZqCPgRcDxms9BA84HC3XHWg/Adv9u0t+QDBmgfbGIq0GD7Ea+PsQ23FFAzeNrygEWwZj904YVk+mUWdxNoh/D3XhdIbQycAlitAhx5wDoFDYHFvstCTBocBFm/K6LnSDQMzNFegTWkgNCjbw5XitAnwqZgwJndR1vrwiIDdeiRXtuQcYAanUUHtPDsRV5pYK4BsFnYr+CAgTEuEE5/eMAB/ZxcaWkA+0rUGRGWjph+n4FB+CmcAktgVNaCy2tJYxfDdii0isupnkpI2R66d8xBXzZNxOlXckzTZWgkLyseebz2Ab9g3S+W2P9AuBEqzJgXCEf8fNYAH1AnZnuYyAkHGMJdJmkIuC0V4AGJOKBi/x2oN2BzL1nwA0X8NEpty7sKGRVYGwbOw3NTxvS3lV7HisZYTzjCeHQavspJdY+BKIh9MQRslvNSmabuPC0d5GxX5R1XdASQTz7cBaYljQa+gA11rzqmGVSkRpQAlHLCEmhyc2Qkm3m815asDdq60kVHSS4igWMS6LGnkdR3mBXEH3EkkgPWMqNSpQy0Vdoz+Cy8GXpfJTdUt5WawU56yD0CS3PlHPEkuwPeCnF9ma7ahl42QQf03r0BbozPsukHVC7V8dSbTEcb7Il1e4YOLspeD/G+xc45tt9zWabddQbG+FHhKwXUIzGNsS2pc30dNXRbkUvrm/wU1Z7g90bXvmCK2gbtXPrGzRovp9yn+tOc98ekXZv98+P6Cw+4xD40xh4fAAAAAElFTkSuQmCC">
                            </image>
                            <image
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGkAAAAhBAMAAAAop5gIAAAAJHpUWHRDcmVhdG9yAAAImXNMyU9KVXBMK0ktUnBNS0tNLikGAEF6Bs5qehXFAAAACXBIWXMAAAABAAAAAQBPJcTWAAAAKlBMVEVHcEz///////////////////////////////////////////////////+LBpLMAAAADXRSTlMA3yBdPLsQn+9/b4/PrPKm6QAAAqJJREFUOMu1lMtrE3EQx39JNqmbKmx8XxYiHkQwEIiIIAs9BPQSSA+lGggsWrCXQMBH8RCoCD0IgV701pNgT4Ee9FioB70VTNuYjc33f3Eev0224CEG/B2yM5n57MxvHmtM4mRWyubfT4DjqXKjUJ+NOsRgqpTgzUZ1MZ6D2sfpHNRzvJ6DMjkzD2X+L7VWXVKhWg0dldO7K41iTDkfCqv34gvsfvv+RaR1nMgzDRRL+Ml+TQDDolKi9LfVpUMyLrG4aKudwdAo1WMbLiu1I8q4yC73RZY6O4hC/itFMYVygWj1FaIaU6Q0qg+Bq+SRp6BvvtIr2L8JuQw7CRUg+mjMbfhMBXhPtjsyaTX0yfMW0JaEZEo7KCvl4yLrj8CUD96C3CG/2ZeIlPOJlOMXKz6KQmWoKkbz8eSymkid5H5RCzGW35EthlBZ60iZe6RogbP05vPiR4G7HNgRVuxMXbCOlLlnWrbTeVq8Eo7U0MFeXI4SDpSqYXM6GzW9M2UyIvkg3t26vHSPf8pKBdbRnCMqwNsCn+uUdi82SEuoHFtUDO7aGSolVHyGVLt2ckAXKWlHavCXWNc29LygWO1kLId6uCA10HvZUW8JVU98is7ci8oRrstfTLW0ffGweInN2UrWkGJvBzIDTKVsW8joyXDKutxdIvm3GnReqBybzX5oKddOc5pnw7Ut5y67EB9+Gp2RY7UyRa3/IR9RpnQOdKJIbqusn1qHKnsUU1RhnjfH7/KdenjHDpJUDwMy5LvxXWlf6xMqCww+PWhih60LwMtwrSOb64qha4dYtrc8oXJNaetI67evTW6byV7rIkk5+mZCGdcnU1RWKsOKrGYsn4aWcioVeT6rSMiby7jyOVYyjxE1rGNmGdGTcLYP49OEX1rlP4cxjyqtrYPOAAAAAElFTkSuQmCC">
                            </image>
                            <clipPath id="__lottie_element_15">
                                <path d="M0,0 L2000,0 L2000,2000 L0,2000z"></path>
                            </clipPath>
                            <clipPath id="__lottie_element_31">
                                <path d="M0,0 L2000,0 L2000,2000 L0,2000z"></path>
                            </clipPath>
                            <clipPath id="__lottie_element_44">
                                <path d="M0,0 L2000,0 L2000,2000 L0,2000z"></path>
                            </clipPath>
                            <clipPath id="__lottie_element_54">
                                <path d="M0,0 L2000,0 L2000,2000 L0,2000z"></path>
                            </clipPath>
                            <clipPath id="__lottie_element_85">
                                <path d="M0,0 L2000,0 L2000,2000 L0,2000z"></path>
                            </clipPath>
                            <clipPath id="__lottie_element_92">
                                <path d="M0,0 L2000,0 L2000,2000 L0,2000z"></path>
                            </clipPath>
                            <clipPath id="__lottie_element_99">
                                <path d="M0,0 L2000,0 L2000,2000 L0,2000z"></path>
                            </clipPath>
                            <clipPath id="__lottie_element_106">
                                <path d="M0,0 L2000,0 L2000,2000 L0,2000z"></path>
                            </clipPath>
                            <clipPath id="__lottie_element_116">
                                <path d="M0,0 L2000,0 L2000,2000 L0,2000z"></path>
                            </clipPath>
                            <clipPath id="__lottie_element_123">
                                <path d="M0,0 L2000,0 L2000,2000 L0,2000z"></path>
                            </clipPath>
                        </defs>
                        <g clip-path="url(#__lottie_element_13)">
                            <g clip-path="url(#__lottie_element_54)" transform="matrix(1,0,0,1,0,0)" opacity="1"
                                style="display: block;">
                                <g transform="matrix(1,0,0,1,1000,1000)" opacity="1" style="display: block;">
                                    <g opacity="1"
                                        transform="matrix(0.9950000047683716,0,0,0.9950000047683716,0.06700000166893005,-1.0670000314712524)">
                                        <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0"
                                            stroke-miterlimit="4" stroke="rgb(255,255,255)" stroke-opacity="1"
                                            stroke-width="6.300000000000001"
                                            d=" M0,-738.5269775390625 C-407.87701416015625,-738.5269775390625 -738.5269775390625,-407.87701416015625 -738.5269775390625,0 C-738.5269775390625,407.87701416015625 -407.87701416015625,738.5269775390625 0,738.5269775390625 C407.87701416015625,738.5269775390625 738.5269775390625,407.87701416015625 738.5269775390625,0 C738.5269775390625,-407.87701416015625 407.87701416015625,-738.5269775390625 0,-738.5269775390625z">
                                        </path>
                                    </g>
                                </g>
                                <g transform="matrix(0.9999977946281433,0,0,0.9999977946281433,1000,1000.0015869140625)"
                                    opacity="1" style="display: block;">
                                    <g opacity="1" transform="matrix(1,0,0,1,0,102)">
                                        <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0"
                                            stroke-miterlimit="4" stroke="rgb(255,255,255)" stroke-opacity="1"
                                            stroke-width="6"
                                            d=" M-75.67900085449219,-627.5159912109375 C-389.04400634765625,-590.1209716796875 -632,-323.4330139160156 -632,0 C-632,349.04400634765625 -349.04400634765625,632 0,632 C349.04400634765625,632 632,349.04400634765625 632,0 C632,-323.9280090332031 388.29998779296875,-590.9359741210938 74.24099731445312,-627.6849975585938">
                                        </path>
                                    </g>
                                </g>
                                <g class="png"
                                    transform="matrix(0.9669075012207031,0,0,0.9669075012207031,949.2373657226562,451.0460205078125)"
                                    opacity="0.31488459688569603" style="display: block;">
                                    <image width="105px" height="33px" preserveAspectRatio="xMidYMid slice"
                                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGkAAAAhBAMAAAAop5gIAAAAJHpUWHRDcmVhdG9yAAAImXNMyU9KVXBMK0ktUnBNS0tNLikGAEF6Bs5qehXFAAAACXBIWXMAAAABAAAAAQBPJcTWAAAAKlBMVEVHcEz///////////////////////////////////////////////////+LBpLMAAAADXRSTlMA3yBdPLsQn+9/b4/PrPKm6QAAAqJJREFUOMu1lMtrE3EQx39JNqmbKmx8XxYiHkQwEIiIIAs9BPQSSA+lGggsWrCXQMBH8RCoCD0IgV701pNgT4Ee9FioB70VTNuYjc33f3Eev0224CEG/B2yM5n57MxvHmtM4mRWyubfT4DjqXKjUJ+NOsRgqpTgzUZ1MZ6D2sfpHNRzvJ6DMjkzD2X+L7VWXVKhWg0dldO7K41iTDkfCqv34gvsfvv+RaR1nMgzDRRL+Ml+TQDDolKi9LfVpUMyLrG4aKudwdAo1WMbLiu1I8q4yC73RZY6O4hC/itFMYVygWj1FaIaU6Q0qg+Bq+SRp6BvvtIr2L8JuQw7CRUg+mjMbfhMBXhPtjsyaTX0yfMW0JaEZEo7KCvl4yLrj8CUD96C3CG/2ZeIlPOJlOMXKz6KQmWoKkbz8eSymkid5H5RCzGW35EthlBZ60iZe6RogbP05vPiR4G7HNgRVuxMXbCOlLlnWrbTeVq8Eo7U0MFeXI4SDpSqYXM6GzW9M2UyIvkg3t26vHSPf8pKBdbRnCMqwNsCn+uUdi82SEuoHFtUDO7aGSolVHyGVLt2ckAXKWlHavCXWNc29LygWO1kLId6uCA10HvZUW8JVU98is7ci8oRrstfTLW0ffGweInN2UrWkGJvBzIDTKVsW8joyXDKutxdIvm3GnReqBybzX5oKddOc5pnw7Ut5y67EB9+Gp2RY7UyRa3/IR9RpnQOdKJIbqusn1qHKnsUU1RhnjfH7/KdenjHDpJUDwMy5LvxXWlf6xMqCww+PWhih60LwMtwrSOb64qha4dYtrc8oXJNaetI67evTW6byV7rIkk5+mZCGdcnU1RWKsOKrGYsn4aWcioVeT6rSMiby7jyOVYyjxE1rGNmGdGTcLYP49OEX1rlP4cxjyqtrYPOAAAAAElFTkSuQmCC">
                                    </image>
                                </g>
                                <g transform="matrix(0.9999979138374329,0,0,0.9999979138374329,1000,1000.00146484375)"
                                    opacity="1" style="display: block;">
                                    <g opacity="1" transform="matrix(0.9980000257492065,0,0,0.9980000257492065,0,203)">
                                        <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0"
                                            stroke-miterlimit="4" stroke="rgb(255,255,255)" stroke-opacity="1"
                                            stroke-width="6.12"
                                            d=" M-82.89299774169922,-527.60498046875 C-338.447998046875,-487.7770080566406 -534,-266.7250061035156 -534,0 C-534,294.9200134277344 -294.9200134277344,534 0,534 C294.9200134277344,534 534,294.9200134277344 534,0 C534,-267.43499755859375 337.406005859375,-488.9519958496094 80.85299682617188,-527.9190063476562">
                                        </path>
                                    </g>
                                </g>
                                <g class="png"
                                    transform="matrix(0.9805846214294434,0,0,0.9805846214294434,945.5775756835938,651.8203735351562)"
                                    opacity="0.4660001431374615" style="display: block;">
                                    <image width="111px" height="33px" preserveAspectRatio="xMidYMid slice"
                                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAG8AAAAhBAMAAAAluehPAAAAJHpUWHRDcmVhdG9yAAAImXNMyU9KVXBMK0ktUnBNS0tNLikGAEF6Bs5qehXFAAAACXBIWXMAAAABAAAAAQBPJcTWAAAAKlBMVEVHcEz///////////////////////////////////////////////////+LBpLMAAAADXRSTlMAZL0fRH/fn+8QjzDPB3pyLQAAAtJJREFUOMulVc9rU0EQ3uS9JCRRiBqlGAKxoL0kkKK0kBpIqChSCoKH6iHQam0ReVCiklLIwRZPGniHtIhQSBUPHgJVRLwEvHnKwWebPEvmf3Fmdt+PCGqJe3iZ3Z1vdna+bzZC/HtEz5bESGMHDofm4+PHBKYB8v45wDGBFYDSSMB5sM2RgDF4JkYCiivmiMDfxv8Dy9WJM8psLtSSLu/l2tObPv/mwkZqCPgRcDxms9BA84HC3XHWg/Adv9u0t+QDBmgfbGIq0GD7Ea+PsQ23FFAzeNrygEWwZj904YVk+mUWdxNoh/D3XhdIbQycAlitAhx5wDoFDYHFvstCTBocBFm/K6LnSDQMzNFegTWkgNCjbw5XitAnwqZgwJndR1vrwiIDdeiRXtuQcYAanUUHtPDsRV5pYK4BsFnYr+CAgTEuEE5/eMAB/ZxcaWkA+0rUGRGWjph+n4FB+CmcAktgVNaCy2tJYxfDdii0isupnkpI2R66d8xBXzZNxOlXckzTZWgkLyseebz2Ab9g3S+W2P9AuBEqzJgXCEf8fNYAH1AnZnuYyAkHGMJdJmkIuC0V4AGJOKBi/x2oN2BzL1nwA0X8NEpty7sKGRVYGwbOw3NTxvS3lV7HisZYTzjCeHQavspJdY+BKIh9MQRslvNSmabuPC0d5GxX5R1XdASQTz7cBaYljQa+gA11rzqmGVSkRpQAlHLCEmhyc2Qkm3m815asDdq60kVHSS4igWMS6LGnkdR3mBXEH3EkkgPWMqNSpQy0Vdoz+Cy8GXpfJTdUt5WawU56yD0CS3PlHPEkuwPeCnF9ma7ahl42QQf03r0BbozPsukHVC7V8dSbTEcb7Il1e4YOLspeD/G+xc45tt9zWabddQbG+FHhKwXUIzGNsS2pc30dNXRbkUvrm/wU1Z7g90bXvmCK2gbtXPrGzRovp9yn+tOc98ekXZv98+P6Cw+4xD40xh4fAAAAAElFTkSuQmCC">
                                    </image>
                                </g>
                                <g transform="matrix(1,0,0,1,1000,999.9999389648438)" opacity="1"
                                    style="display: block;">
                                    <g opacity="1"
                                        transform="matrix(0.9959999918937683,0,0,0.9959999918937683,0.5,323.5)">
                                        <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0"
                                            stroke-miterlimit="4" stroke="rgb(255,255,255)" stroke-opacity="1"
                                            stroke-width="6.24"
                                            d=" M-102.86199951171875,-400.6050109863281 C-281.4679870605469,-354.8810119628906 -413.5,-192.86000061035156 -413.5,0 C-413.5,228.3699951171875 -228.3699951171875,413.5 0,413.5 C228.3699951171875,413.5 413.5,228.3699951171875 413.5,0 C413.5,-194.30799865722656 279.47698974609375,-357.31298828125 98.8290023803711,-401.614990234375">
                                        </path>
                                    </g>
                                </g>
                                <g class="png"
                                    transform="matrix(0.9890658855438232,0,0,0.9890658855438232,923.8419189453125,899.680419921875)"
                                    opacity="0.6200215598156944" style="display: block;">
                                    <image width="154px" height="33px" preserveAspectRatio="xMidYMid slice"
                                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJoAAAAhBAMAAADT3K+SAAAAJHpUWHRDcmVhdG9yAAAImXNMyU9KVXBMK0ktUnBNS0tNLikGAEF6Bs5qehXFAAAACXBIWXMAAAABAAAAAQBPJcTWAAAALVBMVEVHcEz////////////////////////////////////////////////////////NXt0CAAAADnRSTlMA38JEH19/nxDvb48wr1CZNToAAAO7SURBVEjHxZbNaxNbGIdPMlMb03oxrlzIEEfl6lWHoBWkQulCqasStAFxEYJg/UBKcCuWaFe6kOrK1aCIgiLFhXdxEUpAXbgRF7pwU0jaxjvG/v4G348zU6dWFyXgLJJzzpzzvN/vGWM29OSGNnTsyeToestzqG2E5qG0zqoLLPaO5gCd3tEGe6qbmUaRftHqDc05b3pI0+fP0HJHTjcTWu714Ua8Pnx5aD3aicpR+T/kF8URvi9KbPF30W9fALTOWJqzD2iX1V20jgM0OOXXcr6PyPd5lrtEy3t4wx2NdT9Q5//3WKIE8OgtWk2lzctESmKKh1wGU6i7MpbTT2W0m0ZZdHlfBpjVkiFV3wF/XwWWhXZMT+1glYF/zgacuCnaJuDedU8E5hExZcTmY4CycUO2ZgxRk2lBdKXxVvfeYAFOSK4kWq5SQVSpTDC60zCOh+1kcyhRm0fY1QIcJT07atZWpmGvEfFFFlkXwUWmJVGgMyXxVUe0ecEWtQPWMY8VY6qS6GaANfHQNopeZJEl8c3/KVo/vkq4vajBomaZvzzHW7NMCCAuzzHI46gI4gvXU1kkfkvRxtmGuEvdYql5LN3hyTihXasOURtEq9uuEbGCrLT75mSKVhXjODuK1t4silmeVGmXw9Yao4YltRCSwiNY0ZxO0Rbslgwb6fDaOB7kyR2kTok8vlKRZ4EM89CIFS2RTLQ+ja6lBfhXtp8Sp3BQq2i65EyX3w8geWpES3oQpQ5ndWtiDc1Lti+JQTWzQOtBm9LzS4r2wHjRDzSTF1z5dzTOH062KTSymtrd4/ZprOoWiHecc3To61pLh+x2dsJmLDlMGUFZgi0K/tSR4sHMNNBM0aZTTWsTOv1MyaAuwXZ/bFueveroJqAMZOHkvBcp2pzNkPgCamf45QBmAzQTo4z5fJBp940mfJtCOqv59SGmQfNMt/y1raaGj/B5B8uxsKLWn9RC1yb6MhEXTapOQ1tpehtWpVLoVSiRC1tacRkl3NQ6FVP7QvKFo0VSTSwNSEu5XBkzGGpBjkP9Pq8xZh99NNxipIcE1IRnAu4t6kTyWxyFKbSevZSONMr9t2MrOjZBTSTp2H9BW5qHQ8BdaOt8h9ajI/+hG2fIDc0xalftV59t86aS56LiVFHLbSeX1uzh6IJ08tLqej2m8fxb0uC79iIqFD5IQysU7AfRbS++NnYWSn00iS7K+lho1x8WJCvGPOnwLuUg7v36qhx8MjmxOhl+HH92zVy49jx1U9oXw5OPuDt8B/hGhJ3mnQJ8AAAAAElFTkSuQmCC">
                                    </image>
                                </g>
                                <g transform="matrix(1,0,0,1,1000,1000)" opacity="1" style="display: block;">
                                    <g opacity="1"
                                        transform="matrix(0.9940000176429749,0,0,0.9940000176429749,0.25,454.5)">
                                        <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0"
                                            stroke-miterlimit="4" stroke="rgb(255,255,255)" stroke-opacity="1"
                                            stroke-width="6.36"
                                            d=" M-70.0250015258789,-272.72100830078125 C-191.61599731445312,-241.59300231933594 -281.5,-131.29299926757812 -281.5,0 C-281.5,155.46800231933594 -155.46800231933594,281.5 0,281.5 C155.46800231933594,281.5 281.5,155.46800231933594 281.5,0 C281.5,-132.27999877929688 190.25999450683594,-243.24899291992188 67.27999877929688,-273.40899658203125">
                                        </path>
                                    </g>
                                </g>
                                <g class="png"
                                    transform="matrix(0.9944393634796143,0,0,0.9944393634796143,945.8030395507812,1161.0889892578125)"
                                    opacity="0.763701171317382" style="display: block;">
                                    <image width="109px" height="32px" preserveAspectRatio="xMidYMid slice"
                                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAG0AAAAgBAMAAADqEOvXAAAAJHpUWHRDcmVhdG9yAAAImXNMyU9KVXBMK0ktUnBNS0tNLikGAEF6Bs5qehXFAAAACXBIWXMAAAABAAAAAQBPJcTWAAAAKlBMVEVHcEz///////////////////////////////////////////////////+LBpLMAAAADXRSTlMAfzzfZcMf758Qr49Qpb6C7gAAAnNJREFUOMvtlM9rE1EQxycxpk0lsIWi9BAI/jgGAml7C6xK/YEGQjUWDwtbFAWxIJT2Figt2CgE9lJPCr14DNSL6KHQgwcvBdNtTLF8/xdn5r1NdlMRevDmQps38+bz3vfNzHv0vbVPZ/2+tHwqwDkzV0XxP/cPuNy3qeLQ+yzgf++vx1xXB2MTabm0B/Rfi/tmxc1dQp3oRRMIp9mTqczQNZ7+qphEhp8jrgb5RC4bV8Bcpime0CdKoZuKxpTrmKHhJoEVjusqd6sqXAGYXQTmlDtApSlOoidMrQBrhuv0L1K6DbjC3cFqazcLLLBo9JSrTlO6qst6CO9yaNhUTpalbBVrwhVOOCvj+CUumU6hd8TjbVkjA7yRI/Puwql0eo4T4TzelfKyhlg7zGFdEgL4dE6XI6oZ7kiNDPoBG8cyLjHA3zLKwhVNyVw6wE8NnTBc2VTGiNaZpUm9k3n8YC7U6TZzbd1aN5fQXbIzDhv1WFsYzmjb41kP+/F+sUaNVysYgZKUe28fQDlVrm1lJRN1lCtG3M6wWZe08Mp1YxxF0hJcfcBxqlc/3S/9nXPjOh17mpkgOl+c8+M6E3lxTE3CgE5z1WReyqcu43kcys+HEa5ts2brcBjVnSIuj1dGeZIr2bqPJ/vseMAtG25xhBtDL4j1mfZ12va1cmOqITXL68c57utHqsxwHjaCl569R/Z8rCG3Nz/CcR7DjeCpF5pUTGmJ7b117MF7k1u9Cd42wW2byDmbwtti9N0hR+p5fIGvSoLjug7eifmGm920j5AYpjs30V+gTOOh/g1nslusxKGPDdtjl2/4I0/kO//PT2cU+RvNA6Ie3jlVUgAAAABJRU5ErkJggg==">
                                    </image>
                                </g>
                            </g>
                            <g clip-path="url(#__lottie_element_85)" transform="matrix(1,0,0,1,0,0)" opacity="1"
                                style="display: none;">
                                <g transform="matrix(1,0,0,1,1000,1000)" opacity="1" style="display: block;">
                                    <g opacity="1"
                                        transform="matrix(0.9950000047683716,0,0,0.9950000047683716,0.06700000166893005,-1.0670000314712524)">
                                        <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0"
                                            stroke-miterlimit="4" stroke="rgb(255,255,255)" stroke-opacity="1"
                                            stroke-width="6.3"
                                            d=" M0,-738.5269775390625 C-407.87701416015625,-738.5269775390625 -738.5269775390625,-407.87701416015625 -738.5269775390625,0 C-738.5269775390625,407.87701416015625 -407.87701416015625,738.5269775390625 0,738.5269775390625 C407.87701416015625,738.5269775390625 738.5269775390625,407.87701416015625 738.5269775390625,0 C738.5269775390625,-407.87701416015625 407.87701416015625,-738.5269775390625 0,-738.5269775390625z">
                                        </path>
                                    </g>
                                </g>
                                <g clip-path="url(#__lottie_element_92)" transform="matrix(1,0,0,1,0,0)" opacity="1"
                                    style="display: block;">
                                    <g transform="matrix(1.159999966621399,0,0,1.159999966621399,999.9893188476562,882.5972290039062)"
                                        opacity="1" style="display: block;">
                                        <g opacity="1" transform="matrix(1,0,0,1,0,102)">
                                            <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0"
                                                stroke-miterlimit="4" stroke="rgb(255,255,255)" stroke-opacity="1"
                                                stroke-width="6"
                                                d=" M0,-632 C-349.04400634765625,-632 -632,-349.04400634765625 -632,0 C-632,349.04400634765625 -349.04400634765625,632 0,632 C349.04400634765625,632 632,349.04400634765625 632,0 C632,-349.04400634765625 349.04400634765625,-632 0,-632z">
                                            </path>
                                        </g>
                                    </g>
                                    <g clip-path="url(#__lottie_element_99)" transform="matrix(1,0,0,1,0,0)" opacity="1"
                                        style="display: block;">
                                        <g transform="matrix(1.3799999952316284,0,0,1.3799999952316284,1000,720.3458251953125)"
                                            opacity="1" style="display: block;">
                                            <g opacity="1"
                                                transform="matrix(0.9980000257492065,0,0,0.9980000257492065,0,203)">
                                                <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0"
                                                    stroke-miterlimit="4" stroke="rgb(255,255,255)" stroke-opacity="1"
                                                    stroke-width="6.12"
                                                    d=" M0,-534 C-294.9200134277344,-534 -534,-294.9200134277344 -534,0 C-534,294.9200134277344 -294.9200134277344,534 0,534 C294.9200134277344,534 534,294.9200134277344 534,0 C534,-294.9200134277344 294.9200134277344,-534 0,-534z">
                                                </path>
                                            </g>
                                        </g>
                                        <g clip-path="url(#__lottie_element_106)" transform="matrix(1,0,0,1,0,0)"
                                            opacity="1" style="display: block;">
                                            <g transform="matrix(1.7899999618530273,0,0,1.7899999618530273,999.802490234375,419.8944091796875)"
                                                opacity="1" style="display: block;">
                                                <g opacity="1"
                                                    transform="matrix(0.9959999918937683,0,0,0.9959999918937683,0.5,323.5)">
                                                    <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0"
                                                        stroke-miterlimit="4" stroke="rgb(255,255,255)"
                                                        stroke-opacity="1" stroke-width="6.24"
                                                        d=" M0,-413.5 C-228.3699951171875,-413.5 -413.5,-228.3699951171875 -413.5,0 C-413.5,228.3699951171875 -228.3699951171875,413.5 0,413.5 C228.3699951171875,413.5 413.5,228.3699951171875 413.5,0 C413.5,-228.3699951171875 228.3699951171875,-413.5 0,-413.5z">
                                                    </path>
                                                </g>
                                            </g>
                                            <g clip-path="url(#__lottie_element_116)"
                                                transform="matrix(2.6397314071655273,0,0,2.6397314071655273,-1640.6119384765625,-2845.75537109375)"
                                                opacity="1" style="display: block;">
                                                <g transform="matrix(1,0,0,1,1000,1000)" opacity="1"
                                                    style="display: block;">
                                                    <g opacity="1"
                                                        transform="matrix(0.9940000176429749,0,0,0.9940000176429749,0.24941202998161316,454.5)">
                                                        <path stroke-linecap="butt" stroke-linejoin="miter"
                                                            fill-opacity="0" stroke-miterlimit="4"
                                                            stroke="rgb(255,255,255)" stroke-opacity="1"
                                                            stroke-width="6.36"
                                                            d=" M0,-281.5 C-155.46800231933594,-281.5 -281.5,-155.46800231933594 -281.5,0 C-281.5,155.46800231933594 -155.46800231933594,281.5 0,281.5 C155.46800231933594,281.5 281.5,155.46800231933594 281.5,0 C281.5,-155.46800231933594 155.46800231933594,-281.5 0,-281.5z">
                                                        </path>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                        <g transform="matrix(1.159999966621399,0,0,1.159999966621399,999.9893188476562,882.5972290039062)"
                                            opacity="1" style="display: block;">
                                            <g opacity="1" transform="matrix(1,0,0,1,0,102)">
                                                <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0"
                                                    stroke-miterlimit="4" stroke="rgb(255,255,255)" stroke-opacity="1"
                                                    stroke-width="6"
                                                    d=" M0,-632 C-349.04400634765625,-632 -632,-349.04400634765625 -632,0 C-632,349.04400634765625 -349.04400634765625,632 0,632 C349.04400634765625,632 632,349.04400634765625 632,0 C632,-349.04400634765625 349.04400634765625,-632 0,-632z">
                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                            <g clip-path="url(#__lottie_element_123)"
                                transform="matrix(0.9996562600135803,0.02621689811348915,-0.02621689811348915,0.9996562600135803,26.56060791015625,-25.8731689453125)"
                                opacity="1" style="display: none;">
                                <g transform="matrix(0.20999999344348907,0,0,0.20999999344348907,1000.0529174804688,999.1570434570312)"
                                    opacity="1" style="display: none;">
                                    <g opacity="1"
                                        transform="matrix(0.9950000047683716,0,0,0.9950000047683716,0.06700000166893005,-1.0670000314712524)">
                                        <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0"
                                            stroke-miterlimit="4" stroke="rgb(255,255,255)" stroke-opacity="1"
                                            stroke-width="42.3"
                                            d=" M0,-738.5269775390625 C-407.87701416015625,-738.5269775390625 -738.5269775390625,-407.87701416015625 -738.5269775390625,0 C-738.5269775390625,407.87701416015625 -407.87701416015625,738.5269775390625 0,738.5269775390625 C407.87701416015625,738.5269775390625 738.5269775390625,407.87701416015625 738.5269775390625,0 C738.5269775390625,-407.87701416015625 407.87701416015625,-738.5269775390625 0,-738.5269775390625z">
                                        </path>
                                    </g>
                                </g>
                                <g transform="matrix(0.20999999344348907,0,0,0.20999999344348907,1000.0529174804688,999.1570434570312)"
                                    opacity="1" style="display: block;">
                                    <g opacity="1"
                                        transform="matrix(0.9950000047683716,0,0,0.9950000047683716,0.06700000166893005,-1.0670000314712524)">
                                        <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0"
                                            stroke-miterlimit="4" stroke="rgb(255,255,255)" stroke-opacity="1"
                                            stroke-width="42.3"
                                            d=" M-718.8200073242188,170.19500732421875 C-641.9660034179688,496.0260009765625 -349.302001953125,738.5269775390625 0,738.5269775390625 C349.302001953125,738.5269775390625 641.9660034179688,496.0260009765625 718.8200073242188,170.19500732421875">
                                        </path>
                                    </g>
                                </g>
                                <g transform="matrix(0.20999999344348907,0,0,0.20999999344348907,1000.0529174804688,999.1570434570312)"
                                    opacity="1" style="display: block;">
                                    <g opacity="1"
                                        transform="matrix(0.9950000047683716,0,0,0.9950000047683716,0.06700000166893005,-1.0670000314712524)">
                                        <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0"
                                            stroke-miterlimit="4" stroke="rgb(255,255,255)" stroke-opacity="1"
                                            stroke-width="42.3"
                                            d=" M719.1389770507812,-168.83999633789062 C642.7769775390625,-495.3529968261719 349.7869873046875,-738.5269775390625 0,-738.5269775390625 C0,-738.5269775390625 0,-738.5269775390625 0,-738.5269775390625 C-347.2030029296875,-738.5269775390625 -638.4459838867188,-498.9320068359375 -717.4110107421875,-176.06100463867188">
                                        </path>
                                    </g>
                                </g>
                                <g class="png" transform="matrix(1,0,0,1,819.7520141601562,977.9329833984375)"
                                    opacity="1" style="display: block;">
                                    <image width="52px" height="42px" preserveAspectRatio="xMidYMid slice"
                                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADQAAAAqBAMAAAAOimUzAAAAJHpUWHRDcmVhdG9yAAAImXNMyU9KVXBMK0ktUnBNS0tNLikGAEF6Bs5qehXFAAAACXBIWXMAAAABAAAAAQBPJcTWAAAAJFBMVEVHcEz///////////////////////////////////////////8Uel1nAAAAC3RSTlMA3SB8mVsQ77dAMKatPnEAAAFISURBVDjLfZQ9T8NADIYv0EYtU4RElyyBpUgs3RiyRKxd2FmKOrCD1CULQmxdyszC3qkfKID/HD3HZ5/vAl7s8xv5nrNzZ8z/lq6CxLBw0fUokJInCt5gF0glnKG/BGgKpRzlAC8HP4eDPSupZ1M3Jq2t/1bSlU1tjFmS9yyn1Np6mHhKHzNbKgwLTzrHTGVos71Ct/UKF8GHoOMaj5qAxm93yLBhGH6ydIfrW4xb/JlCp73HCv/YocviUaHThymW+CJpyuiy8cpDZ6iB4NJRMiedyCGpgswP6zczmqJq24NrKNGeitQmftwU1YgYfxoN9p361g/6yfgjQq/U71W3+GWAzpNtLnI5INs9fv4aostfBN4UxZasbMKLtGZpG0o9lqro+tWuXhFdzZKkXXxrE5KyWBr+gS74+653YNyNLvOcdL4euUb/Bbk3G0wq86+LAAAAAElFTkSuQmCC">
                                    </image>
                                </g>
                                <g class="png" transform="matrix(1,0,0,-1,1127.383056640625,1019.9329833984375)"
                                    opacity="1" style="display: block;">
                                    <image width="52px" height="42px" preserveAspectRatio="xMidYMid slice"
                                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADQAAAAqBAMAAAAOimUzAAAAJHpUWHRDcmVhdG9yAAAImXNMyU9KVXBMK0ktUnBNS0tNLikGAEF6Bs5qehXFAAAACXBIWXMAAAABAAAAAQBPJcTWAAAAJFBMVEVHcEz///////////////////////////////////////////8Uel1nAAAAC3RSTlMA3SB8mVsQ77dAMKatPnEAAAFISURBVDjLfZQ9T8NADIYv0EYtU4RElyyBpUgs3RiyRKxd2FmKOrCD1CULQmxdyszC3qkfKID/HD3HZ5/vAl7s8xv5nrNzZ8z/lq6CxLBw0fUokJInCt5gF0glnKG/BGgKpRzlAC8HP4eDPSupZ1M3Jq2t/1bSlU1tjFmS9yyn1Np6mHhKHzNbKgwLTzrHTGVos71Ct/UKF8GHoOMaj5qAxm93yLBhGH6ydIfrW4xb/JlCp73HCv/YocviUaHThymW+CJpyuiy8cpDZ6iB4NJRMiedyCGpgswP6zczmqJq24NrKNGeitQmftwU1YgYfxoN9p361g/6yfgjQq/U71W3+GWAzpNtLnI5INs9fv4aostfBN4UxZasbMKLtGZpG0o9lqro+tWuXhFdzZKkXXxrE5KyWBr+gS74+653YNyNLvOcdL4euUb/Bbk3G0wq86+LAAAAAElFTkSuQmCC">
                                    </image>
                                </g>
                            </g>
                            <g clip-path="url(#__lottie_element_15)" transform="matrix(1,0,0,1,0,0)" opacity="1"
                                style="display: none;">
                                <g transform="matrix(0.20999999344348907,0,0,0.20999999344348907,1000.0529174804688,999.1570434570312)"
                                    opacity="1" style="display: none;">
                                    <g opacity="1"
                                        transform="matrix(0.9950000047683716,0,0,0.9950000047683716,0.06700000166893005,-1.0670000314712524)">
                                        <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0"
                                            stroke-miterlimit="4" stroke="rgb(255,255,255)" stroke-opacity="1"
                                            stroke-width="42.3"
                                            d=" M-711.9149780273438,-197.16799926757812 C-729.260009765625,-134.4029998779297 -738.5269775390625,-68.28399658203125 -738.5269775390625,0 C-738.5269775390625,407.87701416015625 -407.87701416015625,738.5269775390625 0,738.5269775390625 C349.302001953125,738.5269775390625 641.9660034179688,496.0260009765625 718.8200073242188,170.19500732421875">
                                        </path>
                                    </g>
                                </g>
                                <g transform="matrix(0.20999999344348907,0,0,0.20999999344348907,1000.0529174804688,999.1570434570312)"
                                    opacity="1" style="display: none;">
                                    <g opacity="1"
                                        transform="matrix(0.9950000047683716,0,0,0.9950000047683716,0.06700000166893005,-1.0670000314712524)">
                                        <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0"
                                            stroke-miterlimit="4" stroke="rgb(255,255,255)" stroke-opacity="1"
                                            stroke-width="42.3"
                                            d=" M697.6890258789062,242.7949981689453 C724.1480102539062,166.75399780273438 738.5269775390625,85.05599975585938 738.5269775390625,0 C738.5269775390625,-407.87701416015625 407.87701416015625,-738.5269775390625 0,-738.5269775390625 C0,-738.5269775390625 0,-738.5269775390625 0,-738.5269775390625 C-347.2030029296875,-738.5269775390625 -638.4459838867188,-498.9320068359375 -717.4110107421875,-176.06100463867188">
                                        </path>
                                    </g>
                                </g>
                                <g class="png" transform="matrix(1,0,0,1,719.7520141601562,977.9329833984375)"
                                    opacity="1" style="display: none;">
                                    <image width="52px" height="42px" preserveAspectRatio="xMidYMid slice"
                                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADQAAAAqBAMAAAAOimUzAAAAJHpUWHRDcmVhdG9yAAAImXNMyU9KVXBMK0ktUnBNS0tNLikGAEF6Bs5qehXFAAAACXBIWXMAAAABAAAAAQBPJcTWAAAAJFBMVEVHcEz///////////////////////////////////////////8Uel1nAAAAC3RSTlMA3SB8mVsQ77dAMKatPnEAAAFISURBVDjLfZQ9T8NADIYv0EYtU4RElyyBpUgs3RiyRKxd2FmKOrCD1CULQmxdyszC3qkfKID/HD3HZ5/vAl7s8xv5nrNzZ8z/lq6CxLBw0fUokJInCt5gF0glnKG/BGgKpRzlAC8HP4eDPSupZ1M3Jq2t/1bSlU1tjFmS9yyn1Np6mHhKHzNbKgwLTzrHTGVos71Ct/UKF8GHoOMaj5qAxm93yLBhGH6ydIfrW4xb/JlCp73HCv/YocviUaHThymW+CJpyuiy8cpDZ6iB4NJRMiedyCGpgswP6zczmqJq24NrKNGeitQmftwU1YgYfxoN9p361g/6yfgjQq/U71W3+GWAzpNtLnI5INs9fv4aostfBN4UxZasbMKLtGZpG0o9lqro+tWuXhFdzZKkXXxrE5KyWBr+gS74+653YNyNLvOcdL4euUb/Bbk3G0wq86+LAAAAAElFTkSuQmCC">
                                    </image>
                                </g>
                                <g class="png" transform="matrix(1,0,0,-1,1227.3819580078125,1019.9329833984375)"
                                    opacity="1" style="display: none;">
                                    <image width="52px" height="42px" preserveAspectRatio="xMidYMid slice"
                                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADQAAAAqBAMAAAAOimUzAAAAJHpUWHRDcmVhdG9yAAAImXNMyU9KVXBMK0ktUnBNS0tNLikGAEF6Bs5qehXFAAAACXBIWXMAAAABAAAAAQBPJcTWAAAAJFBMVEVHcEz///////////////////////////////////////////8Uel1nAAAAC3RSTlMA3SB8mVsQ77dAMKatPnEAAAFISURBVDjLfZQ9T8NADIYv0EYtU4RElyyBpUgs3RiyRKxd2FmKOrCD1CULQmxdyszC3qkfKID/HD3HZ5/vAl7s8xv5nrNzZ8z/lq6CxLBw0fUokJInCt5gF0glnKG/BGgKpRzlAC8HP4eDPSupZ1M3Jq2t/1bSlU1tjFmS9yyn1Np6mHhKHzNbKgwLTzrHTGVos71Ct/UKF8GHoOMaj5qAxm93yLBhGH6ydIfrW4xb/JlCp73HCv/YocviUaHThymW+CJpyuiy8cpDZ6iB4NJRMiedyCGpgswP6zczmqJq24NrKNGeitQmftwU1YgYfxoN9p361g/6yfgjQq/U71W3+GWAzpNtLnI5INs9fv4aostfBN4UxZasbMKLtGZpG0o9lqro+tWuXhFdzZKkXXxrE5KyWBr+gS74+653YNyNLvOcdL4euUb/Bbk3G0wq86+LAAAAAElFTkSuQmCC">
                                    </image>
                                </g>
                                <g clip-path="url(#__lottie_element_31)"
                                    transform="matrix(-0.9999987483024597,-0.0015808641910552979,0.0015808641910552979,-0.9999987483024597,1998.41796875,2001.57958984375)"
                                    opacity="1" style="display: block;">
                                    <g class="png" transform="matrix(1,0,0,1,520.7551879882812,977.9329833984375)"
                                        opacity="1" style="display: block;">
                                        <image width="52px" height="42px" preserveAspectRatio="xMidYMid slice"
                                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADQAAAAqBAMAAAAOimUzAAAAJHpUWHRDcmVhdG9yAAAImXNMyU9KVXBMK0ktUnBNS0tNLikGAEF6Bs5qehXFAAAACXBIWXMAAAABAAAAAQBPJcTWAAAAJFBMVEVHcEz///////////////////////////////////////////8Uel1nAAAAC3RSTlMA3SB8mVsQ77dAMKatPnEAAAFISURBVDjLfZQ9T8NADIYv0EYtU4RElyyBpUgs3RiyRKxd2FmKOrCD1CULQmxdyszC3qkfKID/HD3HZ5/vAl7s8xv5nrNzZ8z/lq6CxLBw0fUokJInCt5gF0glnKG/BGgKpRzlAC8HP4eDPSupZ1M3Jq2t/1bSlU1tjFmS9yyn1Np6mHhKHzNbKgwLTzrHTGVos71Ct/UKF8GHoOMaj5qAxm93yLBhGH6ydIfrW4xb/JlCp73HCv/YocviUaHThymW+CJpyuiy8cpDZ6iB4NJRMiedyCGpgswP6zczmqJq24NrKNGeitQmftwU1YgYfxoN9p361g/6yfgjQq/U71W3+GWAzpNtLnI5INs9fv4aostfBN4UxZasbMKLtGZpG0o9lqro+tWuXhFdzZKkXXxrE5KyWBr+gS74+653YNyNLvOcdL4euUb/Bbk3G0wq86+LAAAAAElFTkSuQmCC">
                                        </image>
                                    </g>
                                    <g class="png" transform="matrix(1,0,0,-1,1426.3787841796875,1019.9329833984375)"
                                        opacity="1" style="display: block;">
                                        <image width="52px" height="42px" preserveAspectRatio="xMidYMid slice"
                                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADQAAAAqBAMAAAAOimUzAAAAJHpUWHRDcmVhdG9yAAAImXNMyU9KVXBMK0ktUnBNS0tNLikGAEF6Bs5qehXFAAAACXBIWXMAAAABAAAAAQBPJcTWAAAAJFBMVEVHcEz///////////////////////////////////////////8Uel1nAAAAC3RSTlMA3SB8mVsQ77dAMKatPnEAAAFISURBVDjLfZQ9T8NADIYv0EYtU4RElyyBpUgs3RiyRKxd2FmKOrCD1CULQmxdyszC3qkfKID/HD3HZ5/vAl7s8xv5nrNzZ8z/lq6CxLBw0fUokJInCt5gF0glnKG/BGgKpRzlAC8HP4eDPSupZ1M3Jq2t/1bSlU1tjFmS9yyn1Np6mHhKHzNbKgwLTzrHTGVos71Ct/UKF8GHoOMaj5qAxm93yLBhGH6ydIfrW4xb/JlCp73HCv/YocviUaHThymW+CJpyuiy8cpDZ6iB4NJRMiedyCGpgswP6zczmqJq24NrKNGeitQmftwU1YgYfxoN9p361g/6yfgjQq/U71W3+GWAzpNtLnI5INs9fv4aostfBN4UxZasbMKLtGZpG0o9lqro+tWuXhFdzZKkXXxrE5KyWBr+gS74+653YNyNLvOcdL4euUb/Bbk3G0wq86+LAAAAAElFTkSuQmCC">
                                        </image>
                                    </g>
                                </g>
                                <g transform="matrix(0.38099998235702515,0,0,0.38099998235702515,1000.04150390625,999.3395385742188)"
                                    opacity="1" style="display: block;">
                                    <g opacity="1"
                                        transform="matrix(0.9950000047683716,0,0,0.9950000047683716,0.06700000166893005,-1.0670000314712524)">
                                        <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0"
                                            stroke-miterlimit="4" stroke="rgb(255,255,255)" stroke-opacity="1"
                                            stroke-width="19.3"
                                            d=" M0,-738.5269775390625 C-407.87701416015625,-738.5269775390625 -738.5269775390625,-407.87701416015625 -738.5269775390625,0 C-738.5269775390625,407.87701416015625 -407.87701416015625,738.5269775390625 0,738.5269775390625 C407.87701416015625,738.5269775390625 738.5269775390625,407.87701416015625 738.5269775390625,0 C738.5269775390625,-407.87701416015625 407.87701416015625,-738.5269775390625 0,-738.5269775390625z">
                                        </path>
                                    </g>
                                </g>
                            </g>
                            <g clip-path="url(#__lottie_element_44)"
                                transform="matrix(-1,-0.000004224197255098261,0.000004224197255098261,-1,1999.995849609375,2000.004150390625)"
                                opacity="1" style="display: block;">
                                <g class="png" transform="matrix(1,0,0,1,119.75199890136719,977.9329833984375)"
                                    opacity="1" style="display: block;">
                                    <image width="52px" height="42px" preserveAspectRatio="xMidYMid slice"
                                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADQAAAAqBAMAAAAOimUzAAAAJHpUWHRDcmVhdG9yAAAImXNMyU9KVXBMK0ktUnBNS0tNLikGAEF6Bs5qehXFAAAACXBIWXMAAAABAAAAAQBPJcTWAAAAJFBMVEVHcEz///////////////////////////////////////////8Uel1nAAAAC3RSTlMA3SB8mVsQ77dAMKatPnEAAAFISURBVDjLfZQ9T8NADIYv0EYtU4RElyyBpUgs3RiyRKxd2FmKOrCD1CULQmxdyszC3qkfKID/HD3HZ5/vAl7s8xv5nrNzZ8z/lq6CxLBw0fUokJInCt5gF0glnKG/BGgKpRzlAC8HP4eDPSupZ1M3Jq2t/1bSlU1tjFmS9yyn1Np6mHhKHzNbKgwLTzrHTGVos71Ct/UKF8GHoOMaj5qAxm93yLBhGH6ydIfrW4xb/JlCp73HCv/YocviUaHThymW+CJpyuiy8cpDZ6iB4NJRMiedyCGpgswP6zczmqJq24NrKNGeitQmftwU1YgYfxoN9p361g/6yfgjQq/U71W3+GWAzpNtLnI5INs9fv4aostfBN4UxZasbMKLtGZpG0o9lqro+tWuXhFdzZKkXXxrE5KyWBr+gS74+653YNyNLvOcdL4euUb/Bbk3G0wq86+LAAAAAElFTkSuQmCC">
                                    </image>
                                </g>
                                <g class="png" transform="matrix(1,0,0,-1,1827.3819580078125,1019.9329833984375)"
                                    opacity="1" style="display: block;">
                                    <image width="52px" height="42px" preserveAspectRatio="xMidYMid slice"
                                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADQAAAAqBAMAAAAOimUzAAAAJHpUWHRDcmVhdG9yAAAImXNMyU9KVXBMK0ktUnBNS0tNLikGAEF6Bs5qehXFAAAACXBIWXMAAAABAAAAAQBPJcTWAAAAJFBMVEVHcEz///////////////////////////////////////////8Uel1nAAAAC3RSTlMA3SB8mVsQ77dAMKatPnEAAAFISURBVDjLfZQ9T8NADIYv0EYtU4RElyyBpUgs3RiyRKxd2FmKOrCD1CULQmxdyszC3qkfKID/HD3HZ5/vAl7s8xv5nrNzZ8z/lq6CxLBw0fUokJInCt5gF0glnKG/BGgKpRzlAC8HP4eDPSupZ1M3Jq2t/1bSlU1tjFmS9yyn1Np6mHhKHzNbKgwLTzrHTGVos71Ct/UKF8GHoOMaj5qAxm93yLBhGH6ydIfrW4xb/JlCp73HCv/YocviUaHThymW+CJpyuiy8cpDZ6iB4NJRMiedyCGpgswP6zczmqJq24NrKNGeitQmftwU1YgYfxoN9p361g/6yfgjQq/U71W3+GWAzpNtLnI5INs9fv4aostfBN4UxZasbMKLtGZpG0o9lqro+tWuXhFdzZKkXXxrE5KyWBr+gS74+653YNyNLvOcdL4euUb/Bbk3G0wq86+LAAAAAElFTkSuQmCC">
                                    </image>
                                </g>
                            </g>
                        </g>
                    </svg></div>
            </div>
            <div id="w-node-b96c3b63-c636-2bc1-4342-3603b3c34939-511400ed" class="c-grid-block__p4 c-home-statement">
                <div data-w-id="df54cb2b-4933-3198-c816-2b5015bdf98e" class="c-content-blk cc--short">
                    <div style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;"
                        class="c-txt-wrapper">
                        <h2 class="c-colour-wave"><?php echo $settings['title']; ?></h2>
                    </div><a data-w-id="1cb59165-78d2-c82e-0352-b9998f1c49cb"
                        style="transform: translate3d(0.00051rem, 0.00051rem, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; opacity: 1; will-change: transform;"
                        href="<?php echo $settings['btn_link']['url']; ?>" class="c-button outlined white mrg-tp w-inline-block">
                        <h3 class="c-button__txt"><?php echo $settings['btn_text']; ?></h3><img
                            src="https://assets-global.website-files.com/5c51b8093dcfd38165099093/5f959b1cd3283e540294ea95_icon-enclosed-arrow.svg"
                            loading="lazy" alt="right arrow inside circle" class="c-button--arrow"
                            style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
        <?php
	}

	/**
	 * Render list widget output in the editor.
	 *
	 * Written as a Backbone JavaScript template and used to generate the live preview.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function content_template() {
		?>
		<#
		html_tag = {
			'ordered': 'ol',
			'unordered': 'ul',
			'other': 'ul',
		};
		view.addRenderAttribute( 'list', 'class', 'elementor-list-widget' );
		#>
		<{{{ html_tag[ settings.marker_type ] }}} {{{ view.getRenderAttributeString( 'list' ) }}}>
			<# _.each( settings.list_items, function( item, index ) {
				var repeater_setting_key = view.getRepeaterSettingKey( 'text', 'list_items', index );
				view.addRenderAttribute( repeater_setting_key, 'class', 'elementor-list-widget-text' );
				view.addInlineEditingAttributes( repeater_setting_key );
				#>
				<li {{{ view.getRenderAttributeString( repeater_setting_key ) }}}>
					<# var title = item.text; #>
					<# if ( item.link ) { #>
						<# view.addRenderAttribute( `link_${index}`, item.link ); #>
						<a href="{{ item.link.url }}" {{{ view.getRenderAttributeString( `link_${index}` ) }}}>
							{{{title}}}
						</a>
					<# } else { #>
						{{{title}}}
					<# } #>
				</li>
			<# } ); #>
		</{{{ html_tag[ settings.marker_type ] }}}>
		<?php
	}

}