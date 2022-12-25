@component($typeForm, get_defined_vars())
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <div class="dropzone-wrapper">
        @if(!empty($value))
            @foreach($value  as $src)
                <div class="dz-preview dz-complete file-sort dz-image-preview" data-file-id="{{$src}}">
                    <input type="hidden" name="{{$name}}[old_src][]" value="{{$src}}">
                    <div class="dz-image" style="filter: none!important;"><img data-dz-thumbnail=""
                                                                               style="filter: none!important;"
                                                                               alt="undefined"
                                                                               src="{{$src}}"></div>
                    <a href="javascript:;" class="btn-remove">×</a>
                </div>
            @endforeach
        @endif
    </div>

    <script>
        $(document).on('click', '.btn-remove', function () {
            $(this).parents('[data-file-id]').remove();
        })
    </script>


    <div data-picture-accepted-files="image/*" >
        <div class="border-dashed text-end p-3 picture-actions">
            <span class="mt-1 float-start">Загрузить файл:</span>
            <div class="btn-group">
                <label class="btn btn-default m-0">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="1em" height="1em" viewBox="0 0 32 32" class="me-2" role="img" fill="currentColor" id="field-cabinetphoto1-6200e193a6eee904f84a1d602c1e84f932ac987e" path="cloud-upload" componentname="orchid-icon">
                        <path d="M23.845 8.124c-1.395-3.701-4.392-6.045-8.921-6.045-5.762 0-9.793 4.279-10.14 9.86-2.778 0.889-4.784 3.723-4.784 6.933 0 3.93 3.089 7.249 6.744 7.249h2.889c0.552 0 1-0.448 1-1s-0.448-1-1-1h-2.889c-2.572 0-4.776-2.404-4.776-5.249 0-2.514 1.763-4.783 3.974-5.163l0.907-0.156-0.080-0.916-0.008-0.011c0-4.871 3.205-8.545 8.161-8.545 3.972 0 6.204 1.957 7.236 5.295l0.214 0.688 0.721 0.015c3.715 0.078 6.972 3.092 6.972 6.837 0 3.408-2.259 7.206-5.678 7.206h-2.285c-0.552 0-1 0.448-1 1s0.448 1 1 1l2.277-0.003c5-0.132 7.605-4.908 7.605-9.203 0-4.616-3.617-8.305-8.14-8.791zM16.75 16.092c-0.006-0.006-0.008-0.011-0.011-0.016l-0.253-0.264c-0.139-0.146-0.323-0.219-0.508-0.218-0.184-0.002-0.368 0.072-0.509 0.218l-0.253 0.264c-0.005 0.005-0.006 0.011-0.011 0.016l-3.61 3.992c-0.28 0.292-0.28 0.764 0 1.058l0.252 0.171c0.28 0.292 0.732 0.197 1.011-0.095l2.128-2.373v10.076c0 0.552 0.448 1 1 1s1-0.448 1-1v-10.066l2.199 2.426c0.279 0.292 0.732 0.387 1.011 0.095l0.252-0.171c0.279-0.293 0.279-0.765 0-1.058z"></path>
                    </svg>
                    Обзор
                    <input type="file"
                           name="{{$name}}[new_src][]"
                           multiple accept="image/*" data-picture-target="upload" data-action="change->picture#upload" class="d-none">
                </label>
            </div>
        </div>
    </div>

@endcomponent
