<div class="modal fade" id="docsAddModal" tabindex="-1" role="dialog" aria-labelledby="requestModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content request-modal_black">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute;right: 20px;top: 20px;"`>
                <span aria-hidden="true">&times;</span>
              </button>
            <div class="modal-body">
                <div class="docs-add__hidden-box">
                    <input type="file" name="docs-add__input" multiple>
                </div>

                <div class="docs-add__select-box">
                    <div class="docs-add__select-img">
                        <svg viewBox="0 0 24 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M18 1C19.1046 1 20 1.89543 20 3V24C20 25.1046 19.1046 26 18 26H2C0.89543 26 0 25.1046 0 24V3C0 1.89543 0.89543 1 2 1H18ZM18 2H2C1.48716 2 1.06449 2.38604 1.00673 2.88338L1 3V24C1 24.5128 1.38604 24.9355 1.88338 24.9933L2 25H18C18.5128 25 18.9355 24.614 18.9933 24.1166L19 24V3C19 2.48716 18.614 2.06449 18.1166 2.00673L18 2ZM6 29C4.89543 29 4 28.1046 4 27H5C5 27.5128 5.38604 27.9355 5.88338 27.9933L6 28H22C22.5128 28 22.9355 27.614 22.9933 27.1166L23 27V6C23 5.48716 22.614 5.06449 22.1166 5.00673L22 5H21V4H22C23.1046 4 24 4.89543 24 6V27C24 28.1046 23.1046 29 22 29H6ZM9.58333 8.91893V12.3542H5.91893C5.41778 12.3542 5 12.7646 5 13.2708C5 13.7806 5.41142 14.1875 5.91893 14.1875H9.58333V18.0811C9.58333 18.5822 9.99374 19 10.5 19C11.0098 19 11.4167 18.5886 11.4167 18.0811V14.1875H15.0811C15.5822 14.1875 16 13.7771 16 13.2708C16 12.761 15.5886 12.3542 15.0811 12.3542H11.4167V8.91893C11.4167 8.41778 11.0063 8 10.5 8C9.99021 8 9.58333 8.41142 9.58333 8.91893Z"></path>
                        </svg>
                    </div>
                    <div>Перетащите файл</div>
                    <div class="docs-add__select-pc"><a href="javascript:;">Искать в PC</a></div>
                    <form action="{{ route('cabinetModal') }}" method="POST" id="formModal" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="file[]" id="doc_input_field" style="display: none;">
                        <input type="submit" value="Send" style="display: none;">
                    </form>
                </div>

                <div class="docs-add__progress">
                    <div class="docs-add__progress__item">
                        <div class="docs-add__progress__file-image">
                            <svg width="24" height="30" viewBox="0 0 24 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.0596 0L24 3.83097V5.83333V27.5C24 28.8807 22.8487 30 21.4286 30H2.57143C1.15127 30 0 28.8807 0 27.5V2.5C0 1.11929 1.15127 0 2.57143 0H18H20.0596ZM18 1.16667H2.57143C1.85609 1.16667 1.26867 1.69913 1.2056 2.37864L1.2 2.5V27.5C1.2 28.1955 1.74768 28.7666 2.4466 28.8279L2.57143 28.8333H21.4286C22.1439 28.8333 22.7313 28.3009 22.7944 27.6214L22.8 27.5V5.83333H18V1.16667ZM22.8 4.66667L22.8 4.31417L19.5626 1.16667H19.2V4.66667H22.8ZM19.4972 16.2358C19.4943 17.3011 18.6591 17.9801 17.2386 17.9801C15.8267 17.9801 14.9261 17.3295 14.8949 16.071H16.0852C16.125 16.6534 16.5852 16.9489 17.2244 16.9489C17.8494 16.9489 18.2528 16.6591 18.2557 16.233C18.2528 15.8409 17.9006 15.6591 17.267 15.5057L16.6335 15.3466C15.6506 15.1108 15.0455 14.6193 15.0483 13.7614C15.0426 12.7045 15.9773 12 17.2528 12C18.5483 12 19.4006 12.7159 19.4176 13.7528H18.2386C18.1932 13.2955 17.8324 13.0284 17.2443 13.0284C16.642 13.0284 16.3097 13.304 16.3097 13.679C16.3011 14.0966 16.7244 14.2841 17.2301 14.4006L17.7528 14.5256C18.7642 14.7528 19.4943 15.267 19.4972 16.2358ZM8.93181 16.8835V17.8977H5V12.0795H8.92045V13.0937H6.23011V14.4801H8.71875V15.4943H6.23011V16.8835H8.93181ZM11.1307 16.0114V17.8977H9.90057V12.0795H12.196C13.517 12.0795 14.2812 12.8949 14.2812 14.0511C14.2812 15.2131 13.5028 16.0114 12.1648 16.0114H11.1307ZM11.9659 15.0256H11.1307V13.0852H11.9602C12.6705 13.0852 13.0142 13.4716 13.0142 14.0511C13.0142 14.6278 12.6705 15.0256 11.9659 15.0256Z" fill="white"/>
                            </svg>
                        </div>
                        <div class="docs-add__progress__file-status">
                            <div class="docs-add__progress__file-info">
                                <div>Profile_photo.pdf</div>
                                <div id="percantage_bar">0%</div>
                            </div>
                            <div class="docs-add__progress__file-line">
                                <div class="line">
                                    <div class="background"></div>
                                    <div id="progress_bar" class="status" style=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="docs-add__progress__file-controls">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path id="path_uploaded_progressbar" fill-rule="evenodd" clip-rule="evenodd" d="M0 10C0 15.5 4.5 20 10 20C15.5 20 20 15.5 20 10C20 4.5 15.5 0 10 0C4.5 0 0 4.5 0 10ZM1.25 10C1.25 5.1875 5.1875 1.25 10 1.25C14.8125 1.25 18.75 5.1875 18.75 10C18.75 14.8125 14.8125 18.75 10 18.75C5.1875 18.75 1.25 14.8125 1.25 10ZM11.1299 10.0108L14.1667 13.0476L13.0367 14.1775L10 11.1408L6.96328 14.1775L5.83334 13.0476L8.87006 10.0108L5.83334 6.97411L6.96328 5.84416L10 8.88089L13.0367 5.84416L14.1667 6.97411L11.1299 10.0108Z" fill="#F2F2F2"/>
                            </svg>
                        </div>
                    </div>
                    {{-- <div class="docs-add__progress__item">
                        <div class="docs-add__progress__file-image">
                            <svg width="24" height="30" viewBox="0 0 24 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.0596 0L24 3.83097V5.83333V27.5C24 28.8807 22.8487 30 21.4286 30H2.57143C1.15127 30 0 28.8807 0 27.5V2.5C0 1.11929 1.15127 0 2.57143 0H18H20.0596ZM18 1.16667H2.57143C1.85609 1.16667 1.26867 1.69913 1.2056 2.37864L1.2 2.5V27.5C1.2 28.1955 1.74768 28.7666 2.4466 28.8279L2.57143 28.8333H21.4286C22.1439 28.8333 22.7313 28.3009 22.7944 27.6214L22.8 27.5V5.83333H18V1.16667ZM22.8 4.66667L22.8 4.31417L19.5626 1.16667H19.2V4.66667H22.8ZM19.4972 16.2358C19.4943 17.3011 18.6591 17.9801 17.2386 17.9801C15.8267 17.9801 14.9261 17.3295 14.8949 16.071H16.0852C16.125 16.6534 16.5852 16.9489 17.2244 16.9489C17.8494 16.9489 18.2528 16.6591 18.2557 16.233C18.2528 15.8409 17.9006 15.6591 17.267 15.5057L16.6335 15.3466C15.6506 15.1108 15.0455 14.6193 15.0483 13.7614C15.0426 12.7045 15.9773 12 17.2528 12C18.5483 12 19.4006 12.7159 19.4176 13.7528H18.2386C18.1932 13.2955 17.8324 13.0284 17.2443 13.0284C16.642 13.0284 16.3097 13.304 16.3097 13.679C16.3011 14.0966 16.7244 14.2841 17.2301 14.4006L17.7528 14.5256C18.7642 14.7528 19.4943 15.267 19.4972 16.2358ZM8.93181 16.8835V17.8977H5V12.0795H8.92045V13.0937H6.23011V14.4801H8.71875V15.4943H6.23011V16.8835H8.93181ZM11.1307 16.0114V17.8977H9.90057V12.0795H12.196C13.517 12.0795 14.2812 12.8949 14.2812 14.0511C14.2812 15.2131 13.5028 16.0114 12.1648 16.0114H11.1307ZM11.9659 15.0256H11.1307V13.0852H11.9602C12.6705 13.0852 13.0142 13.4716 13.0142 14.0511C13.0142 14.6278 12.6705 15.0256 11.9659 15.0256Z" fill="white"/>
                            </svg>
                        </div>
                        <div class="docs-add__progress__file-status">
                            <div class="docs-add__progress__file-info">
                                <div>Profile_photo.pdf</div>
                                <div>54.4 of 89 MB</div>
                            </div>
                            <div class="docs-add__progress__file-line">
                                <div class="line">
                                    <div class="background"></div>
                                    <div class="status status-done" style="width: 100%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="docs-add__progress__file-controls">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20 10C20 15.5228 15.5228 20 10 20C4.47715 20 0 15.5228 0 10C0 4.47715 4.47715 0 10 0C15.5228 0 20 4.47715 20 10ZM4.16667 10.9458L7.72727 14.7222L15.8333 6.12489L14.7727 5L7.72727 12.4725L5.22727 9.82094L4.16667 10.9458Z" fill="#F2994A"/>
                            </svg>
                        </div>
                    </div>
                    <div class="docs-add__progress__item">
                        <div class="docs-add__progress__file-image">
                            <svg width="24" height="30" viewBox="0 0 24 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.0596 0L24 3.83097V5.83333V27.5C24 28.8807 22.8487 30 21.4286 30H2.57143C1.15127 30 0 28.8807 0 27.5V2.5C0 1.11929 1.15127 0 2.57143 0H18H20.0596ZM18 1.16667H2.57143C1.85609 1.16667 1.26867 1.69913 1.2056 2.37864L1.2 2.5V27.5C1.2 28.1955 1.74768 28.7666 2.4466 28.8279L2.57143 28.8333H21.4286C22.1439 28.8333 22.7313 28.3009 22.7944 27.6214L22.8 27.5V5.83333H18V1.16667ZM22.8 4.66667L22.8 4.31417L19.5626 1.16667H19.2V4.66667H22.8ZM19.4972 16.2358C19.4943 17.3011 18.6591 17.9801 17.2386 17.9801C15.8267 17.9801 14.9261 17.3295 14.8949 16.071H16.0852C16.125 16.6534 16.5852 16.9489 17.2244 16.9489C17.8494 16.9489 18.2528 16.6591 18.2557 16.233C18.2528 15.8409 17.9006 15.6591 17.267 15.5057L16.6335 15.3466C15.6506 15.1108 15.0455 14.6193 15.0483 13.7614C15.0426 12.7045 15.9773 12 17.2528 12C18.5483 12 19.4006 12.7159 19.4176 13.7528H18.2386C18.1932 13.2955 17.8324 13.0284 17.2443 13.0284C16.642 13.0284 16.3097 13.304 16.3097 13.679C16.3011 14.0966 16.7244 14.2841 17.2301 14.4006L17.7528 14.5256C18.7642 14.7528 19.4943 15.267 19.4972 16.2358ZM8.93181 16.8835V17.8977H5V12.0795H8.92045V13.0937H6.23011V14.4801H8.71875V15.4943H6.23011V16.8835H8.93181ZM11.1307 16.0114V17.8977H9.90057V12.0795H12.196C13.517 12.0795 14.2812 12.8949 14.2812 14.0511C14.2812 15.2131 13.5028 16.0114 12.1648 16.0114H11.1307ZM11.9659 15.0256H11.1307V13.0852H11.9602C12.6705 13.0852 13.0142 13.4716 13.0142 14.0511C13.0142 14.6278 12.6705 15.0256 11.9659 15.0256Z" fill="white"/>
                            </svg>
                        </div>
                        <div class="docs-add__progress__file-status">
                            <div class="docs-add__progress__file-info">
                                <div>Profile_photo.pdf</div>
                                <div>54.4 of 89 MB</div>
                            </div>
                            <div class="docs-add__progress__file-line">
                                <div class="line">
                                    <div class="background"></div>
                                    <div class="status" style="width: 73%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="docs-add__progress__file-controls">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 10C0 15.5 4.5 20 10 20C15.5 20 20 15.5 20 10C20 4.5 15.5 0 10 0C4.5 0 0 4.5 0 10ZM1.25 10C1.25 5.1875 5.1875 1.25 10 1.25C14.8125 1.25 18.75 5.1875 18.75 10C18.75 14.8125 14.8125 18.75 10 18.75C5.1875 18.75 1.25 14.8125 1.25 10ZM11.1299 10.0108L14.1667 13.0476L13.0367 14.1775L10 11.1408L6.96328 14.1775L5.83334 13.0476L8.87006 10.0108L5.83334 6.97411L6.96328 5.84416L10 8.88089L13.0367 5.84416L14.1667 6.97411L11.1299 10.0108Z" fill="#F2F2F2"/>
                            </svg>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>

