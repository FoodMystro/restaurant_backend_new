<footer>
        <div class="wave footer"></div>
        <div class="container margin_60_40 fix_mobile">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <h3 data-bs-target="#collapse_1">Quick Links</h3>
                    <div class="collapse dont-collapse-sm links" id="collapse_1">
                        <ul>
                            <li><a href="about.html">About us</a></li>
                            <li><a href="#0">Terms & Conditions</a></li>
                            <li><a  href="{{route('help')}}">Help</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 data-bs-target="#collapse_2">Categories</h3>
                    <div class="collapse dont-collapse-sm links" id="collapse_2">
                        <ul>
                            <li><a href="register.html">My account</a></li>
                            <li><a href="{{route('blog')}}">Blog</a></li>
                            <li><a href="{{route('contact')}}">Contacts</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                        <h3 data-bs-target="#collapse_3">Contacts</h3>
                    <div class="collapse dont-collapse-sm contacts" id="collapse_3">
                        <ul>
                            <li><i class="icon_house_alt"></i>{{$data->sec_1_heading3}}</li>
                            <li><i class="icon_mobile"></i>{{$data->sec_1_heading1}}</li>
                            <li><i class="icon_mail_alt"></i><a href="#0">{{$data->sec_1_heading2}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                        <h3 data-bs-target="#collapse_4">Keep in touch</h3>
                    <div class="collapse dont-collapse-sm" id="collapse_4">
                        <div id="newsletter">
                            <div id="message-newsletter"></div>
                            <form method="post" action="assets/newsletter.php" name="newsletter_form" id="newsletter_form">
                                <div class="form-group">
                                    <input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
                                    <button type="submit" id="submit-newsletter"><i class="arrow_carrot-right"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="follow_us">
                            <h5>Follow Us</h5>
                            <ul>
                                @if($data->sec_1_heading7!=null)
                                <li><a href="{{$data->sec_1_heading7}}"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="{{asset('')}}assets/img/twitter_icon.svg" alt="" class="lazy"></a></li>
                                @endif
                                @if($data->sec_1_heading6!=null)
                                <li><a href="{{$data->sec_1_heading6}}"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="{{asset('')}}assets/img/facebook_icon.svg" alt="" class="lazy"></a></li>
                                @endif
                                @if($data->sec_1_heading8!=null)
                                <li><a href="{{$data->sec_1_heading8}}"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="{{asset('')}}assets/img/instagram_icon.svg" alt="" class="lazy"></a></li>
                                @endif
                                {{-- @if($data->sec_1_heading7!=null)
                                <li><a href="{{$data->sec_1_heading4}}"><img src=" data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="{{asset('')}}assets/img/youtube_icon.svg" alt="" class="lazy"></a></li>
                                @endif --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /row-->
            <hr>
            <div class="row add_bottom_25">
                <div class="col-lg-6">
                    <ul class="footer-selector clearfix">
                        <li>
                            <div class="styled-select lang-selector">
                                <select>
                                    <option value="English" selected>English</option>
                                    <option value="French">French</option>
                                    <option value="Spanish">Spanish</option>
                                    <option value="Russian">Italian</option>
                                </select>
                            </div>
                        </li>
                        <li>
                            <div class="styled-select currency-selector">
                                <select>
                                    <option value="GBP" selected>GBP</option>
                                    <option value="USD">USD</option>
                                    <option value="Euro">Euro</option>
                                </select>
                            </div>
                        </li>
                        <li><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="{{asset('')}}assets/img/cards_all.svg" alt="" width="230" height="35" class="lazy"></li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="additional_links">
                        <li><a href="#0">Privacy</a></li>
                        <li><span>© Papa Nadox Kitchen</span></li>
                        <li><span>Powered by <a href="{{$data->sec_1_heading4}}" target="_blank"><b>FoodMystro</b></a></span></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    @yield('scripts')