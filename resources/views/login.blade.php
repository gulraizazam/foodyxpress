@extends('layouts.frontend')
@section('content')
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
    <div style="margin-left:auto; margin-right:auto; max-width: 940px;" id="main-body-section">
        <div id="">
        <div id="ajax-feedback"></div>
            <div class="dialog" style="margin-top: 75px">
                <form action="/sign_ins" accept-charset="UTF-8" method="post" data-airgap-id="18"><input name="utf8" type="hidden" value="✓" autocomplete="off"><input type="hidden" name="authenticity_token" value="pORvWgOqFIUjMyMCJp35anhS30ML6ZumKzX-TgDMnatA2P6lm3R2MI0_Usfl7aHxdQ2bwh_FuNEUZ-PHA3GL0Q" autocomplete="off">
                    <div class="title dialog-title-padding">
                        Sign In
                    </div>
                    <div>
                        <label class="control-label" for="email">Email</label>
                        <input type="text" name="user[email]" id="email" value="" size="30" class="form-input">
                    </div>
                    <div>
                        <label class="control-label" for="password">Password</label>
                        <input type="password" name="user[password]" id="password" value="" class="form-input">
                        <span style="padding-left: 10px; position: relative; top: -3px;">
                            <a href="/password_reset_requests/new?destination=https%3A%2F%2Fwww.ezcater.com%2Fsign_in">Forgot your password?</a>
                        </span>
                    </div>
                    <div style="margin-top: 20px">
                        <button type="submit" class="btn btn-success" style="margin-right: 3px">Sign In</button>
                        or <a href="/sso_session/new">use Single Sign On instead</a>
                    </div>
                </form>
                <div style="margin-bottom: 30px;">
                    <div style="float: left">
                        Don't have an account?
                        <a href="/register">Create one</a>
                    </div>
                    <div style="float: right;">
                    <a href="/caterer_portal/sign_in">I'm a Caterer</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
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