<div class="form-section">
    <div class="row">
        <div class="col-md-6  form-section_img">
            <img data-src="{{asset('static/women.jpg')}}" alt="alt">
        </div>
        <div class="col-md-6 right-column">
            <div class="form-section_content">
                <div class="section-title">{{__('form_requests.send_us')}} <span class="min">{{__('form_requests.your_request')}}</span></div>
                <form action="{{route('send-form')}}" class="static-form" data-form-submit method="POST">
                    <p class="send-status"></p>
                    @csrf
                    <input type="hidden" name="form_result[title]" value="{{__('form_requests.send_us_your_request')}}">
                    <div class="form-group">
                        <input type="text" class="form-control requiredField callback-name" name="form_result[name]">
                        <label class="form-label">{{__('form_requests.name')}}</label>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control requiredField callback-email" name="form_result[email]">
                        <label class="form-label">{{__('form_requests.mail')}}</label>
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control requiredField callback-phone" name="form_result[phone]">
                        <label class="form-label">{{__('form_requests.phone')}}</label>
                    </div>
                    <div class="form-group form-group_select">
                        <select class="js-select" name="form_result[receive_news]">
                            <option value="">Выберите удобный способ получать новости</option>
                            <option value="Lorem ipsum dolor.">Lorem ipsum dolor.</option>
                            <option value="Lorem ipsum dolor1.">Lorem ipsum dolor1.</option>
                        </select>
                    </div>
                    <div class="form-footer">
                        <label class="unified-checkbox">
                            <input value="" type="checkbox" name="checkbox" checked>
                            <span class="checkbox-text">{{__('form_requests.accept')}}
                                <a href="/privacy-policy" target="_blank">{{__('form_requests.privacy')}}</a> </span>
                        </label>
                        <input type="submit" class="static-form_submit main-mod_btn js_form-submit"
                               value="{{__('form_requests.join')}}">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>