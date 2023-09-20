@extends('layouts.frontend')
@section('content')
    <link rel="stylesheet" href="{{asset('assets/css/register.css')}}">
    <div style="margin-left:auto; margin-right:auto; max-width: 940px;" id="main-body-section">
     <div id="">
        <div id="ajax-feedback"></div>
            <div class="dialog" style="margin-top: 75px">
                <form action="/create_account" accept-charset="UTF-8" method="post" data-airgap-id="18"><input name="utf8" type="hidden" value="✓" autocomplete="off"><input type="hidden" name="authenticity_token" value="D75ab1qQREjeN1LR4R8LiDIqa7ufvuMcwvPYgqscxaDrgsuQwk4m_XA7IxQib1MTP3UvOouSwGv9ocULqKHT2g" autocomplete="off">
                    <div class="title dialog-title-padding">
                        Create Your Account
                    </div>
                    <div style="display: table;">
                        <div class="ez-inline-block">
                            <div class="ez-inline-block">
                                <label for="first_name" class="control-label ">First Name</label>
                                <input type="text" name="user[first_name]" id="first_name" value="" class="form-input">
                            </div>
                        </div>
                        <div class="ez-inline-block">
                            <div class="ez-inline-block" style="padding-left: 12px">
                                <label for="last_name" class="control-label">Last Name</label>
                                <input type="text" name="user[last_name]" id="last_name" class="form-input">
                            </div>
                        </div>
                    </div>
                    <div style="display: table;">
                        <div class="ez-inline-block">
                            <label for="email" class="control-label ">Email <span id="email_span"></span></label>
                            <input type="text" name="user[email]" id="email" class="form-input">
                        </div>
                        <div class="ez-inline-block" style="padding-left: 12px">
                            <label for="password" class="control-label">
                                Password
                                <div data-react-class="Shared.AdaptedTooltip" data-react-props="{&quot;position&quot;:&quot;right&quot;,&quot;iconClass&quot;:&quot;icon-question-sign&quot;,&quot;message&quot;:&quot;Passwords must be at least 7 characters long, and include one number.&quot;}"><div data-reactroot="" class="tooltip-container"><button class="tooltip-trigger"><i class="icon-question-sign"></i></button><div tabindex="0" role="tooltip" class="tooltip right ">Passwords must be at least 7 characters long, and include one number.</div></div></div>
                            </label>
                            <input type="password" name="user[password]" id="password" class="form-input">
                        </div>
                    </div>

                    <div class="ez-inline-block" style="border-bottom: 1px solid #ddd; padding-bottom: 10px;">
                        <div class="ez-inline-block">
                            <label for="mobile_phone" class="control-label" style="margin: 0;">
                                Mobile Phone
                                <div data-react-class="Shared.AdaptedTooltip" data-react-props="{&quot;position&quot;:&quot;right&quot;,&quot;iconClass&quot;:&quot;icon-question-sign&quot;,&quot;message&quot;:&quot;We will only call this number if there is a last minute delivery/order issue. If you do not have a mobile phone, please enter your home or office phone number. Your number will not be shared with 3rd parties.&quot;}"><div data-reactroot="" class="tooltip-container"><button class="tooltip-trigger"><i class="icon-question-sign"></i></button><div tabindex="0" role="tooltip" class="tooltip right ">We will only call this number if there is a last minute delivery/order issue. If you do not have a mobile phone, please enter your home or office phone number. Your number will not be shared with 3rd parties.</div></div></div>
                            </label>      
                            <div style="color: #777; font-size:70%; margin: 3px;">
                                We may send you informational and transactional text messages such as order confirmations. <a href="https://ezcater.com/sms-terms">Terms</a> &amp; <a href="https://www.ezcater.com/privacy_policy">Privacy Policy</a> apply. Message and data rates may apply
                            </div>
                            <input type="text" name="user[mobile_phone]" id="mobile_phone" class="form-input">
                        </div>
                    </div>
                    <div style="margin: 15px 0; height: 40px">
                        <div style="color: #777; font-size:70%; margin-bottom: 15px;">
                            By creating an account, you agree to our <a href="/terms_of_use">Terms</a> and <a href="/privacy_policy">Privacy Policy</a>.
                        </div>
                        <button type="submit" class="btn btn-success">Create Account</button>
                    </div>
                    <div class="muted" style="padding-top: 15px">
                        Already have an account? <a href="/login">Sign in</a>.
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <div class="col-12 para_disclaimer" >
        <div class="text-center py-4 text-700 ">
            <div class="footer_textalign">
                <a class="footer_text"> ©Copyright 2008 - 2020 Nextbits Corporation All Rights Reserved</a>
                <div>
                    <img src="./assets/img/poweredby.png"/>
                </div>

            </div>
        </div>
    </div>
@endsection