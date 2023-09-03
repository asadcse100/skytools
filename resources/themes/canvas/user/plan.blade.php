<x-user-profile heading="h1" :title="__('profile.plan')" :hero-class="$user->subscription ? '' : 'center mt-5'">
    @if ($user->subscription && $plan)
        <div class="row">
            <div class="col-md-6">
                <h5>@lang('tools.plan')</h5>
                <div class="text-muted">{{ $plan->name }}</div>
            </div>
            <div class="col-md-6">
                <h5>@lang('tools.processor')</h5>
                <div class="text-muted">{{ ucfirst($subscription->payment_gateway) }}</div>
            </div>
            <div class="col-md-6 mt-3">
                <h5>@lang('tools.amount')</h5>
                <div class="text-muted"><x-money :currency="$subscription->currency" :amount="$subscription->amount ?? 0" convert /> / {{ $subscription->plan_type }}</div>
            </div>
            <div class="col-md-6 mt-3">
                <h5>@lang('tools.expiryDate')</h5>
                <div class="text-muted">{{ $subscription->expiry_date->format(setting('datetime_format')) }}</div>
            </div>
        </div>
        <hr class="my-4">
        <div class="row">
            <div class="col-md-12 mb-2">
                <h5>@lang('tools.features')</h5>
            </div>
            <ul class="list-group list-group-flush">
                @foreach ($properties as $property)
                    <li class="list-group-item">
                        <div class="d-flex justify-content-between py-1">
                            <span class="plan-name">
                                <i
                                    class="me-2 an an-{{ !$plan->getPlanValues($property->prop_key)?->max()? 'times-circle text-danger': 'chack text-success' }}"></i>
                                <strong>
                                    {{ $property->name }}
                                </strong>
                            </span>
                            <span class="plan-value">
                                <span
                                    class="text-muted ms-2">{{ $plan->getPlanValues($property->prop_key)?->max() }}</span>
                            </span>
                        </div>
                        <div class="text-muted small ms-4">{{ $property->description }}</div>
                    </li>
                @endforeach
                <li class="list-group-item">
                    <div class="py-1">
                        <strong>
                            <i
                                class="me-2 an an-{{ $plan->is_ads == 0 ? 'times-circle text-danger' : 'chack text-success' }}"></i>
                            @lang('tools.isAdsAllowed')
                        </strong>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="py-1">
                        <strong>
                            <i
                                class="me-2 an an-{{ $plan->is_api_allowed == 0 ? 'times-circle text-danger' : 'chack text-success' }}"></i>
                            @lang('tools.isApiAllowed')
                        </strong>
                    </div>
                </li>
            </ul>
        </div>
        <hr class="my-4">
        <div class="row">
            <div class="col-md-12 text-center">
                <a class="btn btn-danger rounded-pill ps-5 pe-5 mt-3"
                    href="{{ route('plans.cancel.subscription') }}">@lang('tools.cancelSubscription')</a>
            </div>
        </div>
    @else
        <div class="row text-center">
            <div class="col-md-12 mb-3">
                <p>@lang('tools.noSubscription')</p>
            </div>
            <div class="col-md-12 text-center mb-5">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1278 979.7"
                    style="enable-background:new 0 0 1278 979.7" xml:space="preserve" width="300">
                    <path fill="#f0f0f0"
                        d="M1078.1 463.3h63.9v27.2h-63.9zM1000.8 463.3h63.9v27.2h-63.9zM1116.8 501.2h63.9v27.2h-63.9zM1039.5 501.2h63.9v27.2h-63.9zM1078.1 539h63.9v27.2h-63.9zM1000.8 539h63.9v27.2h-63.9z" />
                    <ellipse fill="#f0f0f0" cx="639" cy="952.5" rx="639" ry="27.3" />
                    <path fill="#f0f0f0"
                        d="M223.9 646.3h63.9v27.2h-63.9zM146.5 646.3h63.9v27.2h-63.9zM262.5 684.1h63.9v27.2h-63.9zM185.2 684.1h63.9v27.2h-63.9zM107.9 684.1h63.9v27.2h-63.9zM301.2 722h63.9v27.2h-63.9zM223.9 722h63.9v27.2h-63.9zM146.5 722h63.9v27.2h-63.9zM262.5 759.8h63.9V787h-63.9zM185.2 759.8h63.9V787h-63.9z" />
                    <path style="fill:#ddd;enable-background:new"
                        d="M383.7 627.6H257.6L197.8 951h11.1l70.2-297.6h79.2L396.8 951l16.5-.1z" />
                    <path fill="#fcb373"
                        d="M478.9 895.7c0 7.1 6.4 20.9.7 34.5-6 14.1-61.5 2.7-61.5 2.7l-21.2-20c17-3.7 29.6-21.7 37-31.4 8.6-11.3 23.8-39.3 34.2-59.1 8.9 5.7 25.8 15.6 37.4 17.5-12.4 18.4-26.6 42.4-26.6 55.8z" />
                    <path
                        d="M410.9 898.3s-26.7 2.6-45.4 17.5c-17.8 14.2-14.2 27.5 2.7 33.4 16 5.6 45.2 2.1 66.2 0 30-3.1 63.9-11 47.3-36.6 0 0 1.9 11-6.5 16.5-5.4 3.6-9.5 6.5-21.7 6.4-10.5-.1-10.6-3.1-10.6-3.1s-7.2-30.9-32-34.1z" />
                    <path fill="#191919"
                        d="M821.8 687.8c-.7 16.1-4.9 36.3-18.9 50.1-7.9 7.7-18.8 13.5-34.1 15.4-31.1 4-76.1 2.2-115.5-.9-25.1-1.9-48-4.4-63.5-6.3-12.9-1.5-20.8-2.6-20.8-2.6s-3.5 16.5-31.1 52.2c-12.1 15.6-25.8 44.2-25.8 44.2-1.9.5-4.2.5-6.7.1-11.6-1.9-28.5-11.8-37.4-17.5-3.7-2.3-6-3.9-6-3.9s55.7-124.7 75.8-140.6c17-13.5 84.5-14.8 133.8-14.5v.1s3.8 1 10.5 2.4c.7.1 1.4.3 2.2.5 18.3 3.8 54.1 10 92.1 10 21.4 0 38-1.1 42.9-1.5.9 3.9 1.8 8.3 2.5 12.8z" />
                    <path
                        d="M653.3 752.4c39.4 3.1 84.3 4.9 115.5.9 15.2-1.9 26.2-7.7 34.1-15.4 14.1-13.8 18.2-34 18.9-50.1-1.5-10.2-4.3-19.6-6.6-26l-87.5 2.6s-11.8 1-29.2.8c-6.7.3-24.9 1.8-44.7 4.8-17.1 2.5-34.1 4.4-46.6 15.3-20.9 18.2-23 57.1-23 57.1l-15.2 1.2s7.9 1.1 20.8 2.6c15.6 1.7 38.4 4.2 63.5 6.2z"
                        style="fill:#1c1c1c" />
                    <path fill="#e8b577"
                        d="M744.3 758.2 762.7 951h11L759 758.2zM686.1 763.3 600.2 951h-10.7l76.9-188.3c6.3.2 12.9.4 19.7.6z" />
                    <path fill="#fcb373"
                        d="M569 920.1c.1-.1.7-.2 1.7-.4-1 .2-1.6.4-1.7.4zM655.8 949c-35.2 9-45.4-.5-56.8-15.2-11.9-15.4-24-14.9-28.3-14.1 5.6-1.5 23.1-6.4 27.1-11.6 6.6-8.6 8.5-33 9.1-50.6 11.8-1.2 28.4-3.2 37.9-6.2-.8 19.1-.8 48 6.1 63.2 7.1 15.7 13 32.4 4.9 34.5z" />
                    <path
                        d="M586.1 908.3s-28.3 5.9-48.3 20c-15.8 11.1-1.5 27 16 30.6 21.5 4.4 40 1.2 69.7-.7 29.4-1.9 54.4-10.7 32.6-31.4 0 0 3.6 9.4-.7 15.5-3.1 4.4-9.4 6.3-21.5 6.2-10.5-.1-12.1-4.3-12.1-4.3s-10.9-32.7-35.7-35.9z" />
                    <path
                        d="M864.4 715.9c-4.3 11.7-12.4 26.7-30.3 37.1-5.1 3-11 5.6-17.9 7.6-10.7 3.2-23.7 5.1-39.4 4.9-26.2-.3-60.2-1.2-90.6-2.2-6.8-.2-13.4-.4-19.7-.7-4.4-.2-8.6-.3-12.7-.4-.1-3.4-.2-6.7-.4-9.9-.4-6.8-1.2-13-2.5-18.8 0 0 90.3 17.2 142.8 7.1 3.4-.7 6.5-1.6 9.2-2.8 19.9-8.8 20.4-30.6 18.9-50.1-.3-4.6-.7-9-1.2-13.1-.5-8.9-3.4-29.7-6.5-49.7l49.7-8.4c0 .1 8 79.2.6 99.4z"
                        style="fill:#ffc83a" />
                    <path fill="#fa8617"
                        d="m959.8 551-7.1 63.2h-35.2l-1.5-18.8-.3-4.8-.1-1.2-1.9-23.9-.2-2.5-.4-4.8-.5-7.2z" />
                    <path fill="#fa8617"
                        d="M915.7 590.6c-.5.1-1.1.1-1.6.1-7.6 0-13.8-6.2-13.8-13.8 0-7.5 5.9-13.5 13.3-13.8l-.4-4.9c-9.9.5-17.8 8.7-17.8 18.7 0 10.3 8.4 18.7 18.7 18.7.7 0 1.3 0 2-.1l-.4-4.9z" />
                    <path
                        d="M933.4 542.4s4-14.9 1.1-30.7c-2.6-14.4-17.3-17.2-19.3-28.2-2.9-15.8 24.1-26.6 37.2-3.7 14.9 25.9-19 62.6-19 62.6z"
                        style="fill:#cecece" />
                    <path fill="#e8b577" d="m897.5 951-11.6 1.5-69.7-191.9c6.9-2.1 12.8-4.7 17.9-7.6l63.4 198z" />
                    <path style="opacity:.2;fill:#aaa;enable-background:new"
                        d="M1009.7 951H995l-43.1-297.6h-91.2L832.4 951h-10.5l20.6-323.4h135.9z" />
                    <path
                        d="M802.9 737.9c-2.7 1.2-5.8 2.2-9.2 2.8-52.4 10.1-142.8-7.1-142.8-7.1 1.3 5.8 2 12 2.5 18.8.2 3.2.3 6.4.4 9.9.5 20.8-1.1 47.3-1.5 84.2 0 1.8-3 3.5-7.5 4.9-9.5 3-26.1 5-37.9 6.2-7.8.8-12.8 1.1-12.8 1.1l-4.3-112.5-.3-9.1s-.7-52.7 44.1-62.5c15.1-3.3 31.7-6.1 48.4-8.6.7.1 1.4.3 2.2.5 18.3 3.8 54.1 10 92.1 10 25.4 0 43.9-1.6 44.3-1.6.5 4.1.8 8.5 1.2 13.1 1.4 19.3 1 41.1-18.9 49.9z"
                        style="fill:#333" />
                    <path fill="#191919"
                        d="M793.6 740.7c-12.3 2.4-26.7 3.2-41.5 3.2-3 0-5.9-.1-8.9-.1-3-.1-6-.2-8.9-.3-3-.1-5.9-.3-8.9-.5-2-.1-3.9-.3-5.9-.4-8.7-.7-17.2-1.5-25-2.4l-5.1-.6c-22.5-2.8-38.6-5.8-38.6-5.8.3 1.4.6 2.8.8 4.3v.2c.2 1.4.5 2.9.7 4.4v.2c.2 1.5.4 3.1.5 4.6v.1c.2 1.6.3 3.3.4 5 39.4 3.1 84.3 4.9 115.5.9 15.2-1.9 52.5-5.8 53-44-1.8 14.6-8.7 27.5-28.1 31.2z" />
                    <path fill="#fa8617"
                        d="M864.4 567.4h-1s-7.6-.7-21.6 2.7c-10.5 2.6-23 7.7-24.5 8.3-.1 0-.2.1-.2.1l-28-52.6c.6 1.1 9.7 26.9 17 54 2.8 10.5 13.5 76.8 14.5 94.8 0 0-18.7 1.6-44.3 1.6-54.6 0-104.8-12.8-104.8-12.8s2.8-22.5 2.6-49.4c0-8 .1-64.7-4.8-76.3l-52.3 48-3.6-5.2-21-30.9-1.3-1.8s39.2-49.9 57.2-73.2c8.9-11.5 43.9-28.2 43.9-28.2v-.7c9.7 2.3 27.4 3.4 43.8-11l.1.1s63.6 12.5 74.5 26.8c21.7 28.1 53.8 105.7 53.8 105.7z" />
                    <path fill="#fcb373"
                        d="m613.5 580.6-57.7 33.6h-74.4s20.7-17.7 28.8-20.1c11.7-3.6 37.8 2.3 37.8 2.3l44.4-46.6 21.1 30.8zM736.2 434.8c-16.5 14.4-34.1 13.2-43.8 11v-15.4c12.1-3.5 24.8-16.3 32.4-28.8l11.4 33.2z" />
                    <path fill="#fcb373"
                        d="M743.6 373.8c0-.3 0-.6-.1-.9 0-.4-.1-.8-.2-1.1-.1-.3-.1-.6-.2-.9-.1-.6-.3-1.3-.6-1.8-.1-.3-.2-.5-.3-.8-.3-.5-.6-1.1-.9-1.5-.2-.2-.3-.5-.5-.7-.2-.2-.4-.5-.6-.7l-.6-.6c-.2-.2-.4-.4-.6-.5-.2-.2-.4-.3-.7-.5-.2-.2-.4-.3-.7-.4-.5-.3-1-.5-1.5-.6-.9-.3-1.8-.4-2.7-.4-5.3.2-5 7-4.8 13.5 0 1.4.1 2.7.2 3.9l-2.3-.6s-2-13.6-2.3-18c-.4-5.3-6.6-12.2-10.6-14.1-.3-.1-.5-.2-.8-.3-13.9-4.6-40.8-2.7-57.7-6.7-11.3 25.3-2 90.4 30.3 91.2 2.1.1 4.3-.3 6.6-.9 12.1-3.5 24.8-16.3 32.4-28.8 3.5-5.8 5.9-11.5 6.7-16.2.8.4 1.7.6 3 .6 4.3-.2 7.8-3.7 8.8-8.5l.3-1.5c.4-.8.4-1.5.4-2.2z" />
                    <path fill="#bf6113"
                        d="M780.3 501.6c.9 3.8 5.5 14.8 9.2 25.1l27.7 51.8 9.7-3.7c-10.2-2.9-46.6-73.2-46.6-73.2zM675.4 664.5c.1-.2.3-.4.4-.6 4.6-7.7 2.1-88.2-1.1-114.1-1.2-9.5-7.5-29.1-7.5-29.1l2.1 17.2c4.9 11.7 4.8 68.4 4.8 76.3.1 26.9-2.6 49.4-2.6 49.4s1.4.3 3.9.9z" />
                    <path style="fill:#d8d8d8" d="M648.6 614.2H492.8l-42.2-136.7H616z" />
                    <path style="fill:#718087"
                        d="m746.3 604.2-9.2 10h-88.5L616 477.5H450.6l6.8-2.8h162.8l31.1 129.5z" />
                    <circle transform="rotate(-9.259 541.873 537.416)" style="opacity: .2;enable-background: new"
                        cx="542" cy="537.5" r="13.4" />
                    <path style="opacity: .2;enable-background: new"
                        d="M692.3 430.4v8.2c2.2 0 5.6-1.1 10.8-3.7 15-7.7 19.7-22.5 21.2-32.5-7.7 12.2-20.1 24.6-32 28zM711.4 346.2c-.3-.1-.7-.2-1-.3-.2 0-.3-.1-.5-.1-.3-.1-.7-.2-1-.2-.2 0-.3-.1-.5-.1-.4-.1-.7-.1-1.1-.2-.2 0-.3-.1-.5-.1-.4-.1-.7-.1-1.1-.2-.1 0-.3 0-.4-.1-.4-.1-.8-.1-1.2-.2-.1 0-.2 0-.4-.1-.4-.1-.9-.1-1.3-.2h-.3c-.5-.1-1-.1-1.5-.2h-.2c-14-1.5-31.8-1.2-44.4-4.1 5 3.5 27.5 6.5 42 7 26.8.9 24.9 13.2 27.7 25.2-.6-4.1-1.2-8.9-1.3-11.3-.4-5.3-6.6-12.2-10.6-14.1-.3-.1-.5-.2-.8-.3-.4-.1-.9-.3-1.3-.4 0 .1-.1 0-.3 0z" />
                    <path fill="#191919"
                        d="M808.4 698c-.3.9-.6 1.9-1 2.8-.4-.2-.9-.4-1.3-.7-12-6.5-14.8-16.9-15.2-24 1 0 2-.1 2.9-.1.3 6.2 2.7 15.2 13.2 21.2.5.3 1 .6 1.4.8z" />
                    <path fill="#191919"
                        d="M653.8 778.2c-6.6-14.6-14.2-32.9-14.1-40 .2-9.5 2.5-15.8 7-19.4 8.8-6.9 25.6-3.3 46.9 1.4 18.4 4 41.3 9 65.3 8.2 20.1-.6 34.7-6.7 43.2-18 2.3-3 4-6.3 5.3-9.6.4-.9.7-1.9 1-2.8 2.6-8.5 2.5-17 1.9-22.6-.5 0-1 0-1.5.1.6 5.4.7 13.6-1.8 21.8-.3.9-.6 1.9-1 2.9-1.2 3.2-2.9 6.4-5.1 9.4-8.2 10.9-22.4 16.8-42 17.4-23.9.8-46.7-4.2-65-8.2-21.7-4.7-38.8-8.4-48.1-1.1-4.9 3.8-7.4 10.5-7.6 20.5-.2 7.9 8.5 28.4 15.5 43.5l.1-3.5z" />
                    <path fill="#fa8617"
                        d="M820.6 674.7c-.1 0-.6 0-1.5.1-4.9.4-21.4 1.5-42.9 1.5-38 0-73.8-6.2-92.1-10-.8-.2-1.5-.3-2.2-.5-6.7-1.4-10.5-2.4-10.5-2.4v-.1c.2-1.9 2.7-23.6 2.6-49.3 0-1.8 0-6-.1-11.5l134.7-9.5c1.6 8.6 3.5 20.1 5.3 31.9 3.3 20.1 6.2 40.9 6.7 49.8z" />
                    <path style="fill:#ddd;enable-background:new" d="M197.8 614.2H1029v13.4H197.8z" />
                    <path fill="#fcb373"
                        d="M863.4 567.4s-7.6-.7-21.6 2.7c-10.5 2.6-23 7.7-24.5 8.3-.1 0-.2.1-.2.1l-80.6 15.8s-40.8-8.2-46.2-6c-8.4 3.5-35.1 25.8-35.1 25.8h186.6c3.3 0 24-.2 27.3-5.9 8.2-14-5.7-40.8-5.7-40.8z" />
                    <path style="opacity: .2;enable-background: new"
                        d="M644.7 852.2v-.9c-9.5 3-26.1 5-37.9 6.2 0 1.3-.1 2.7-.2 4.1 23.8-.6 38.1-9.4 38.1-9.4zM467.1 824.2c8.4 5.4 22.9 14.8 34.1 22.1 1.4-2.2 2.8-4.3 4.2-6.3-11.6-1.9-28.5-11.8-37.4-17.5-.3.5-.6 1.1-.9 1.7z" />
                    <path
                        d="M463.4 819.5c1 .7 2.6 1.7 4.5 3 8.9 5.7 25.8 15.6 37.4 17.5 2.1.3 4 .4 5.6.2-9-2.1-37.9-16-47.5-20.7z" />
                    <path
                        d="M469.1 798.8s8 6.2 23 13.5c12.4 6 27.2 13.4 27.2 13.4s2.9 10.7-5.9 14.6c-4.5 1.9-53.2-22.3-53.2-22.3s-2-16.6 8.9-19.2z" />
                    <path fill="#191919"
                        d="M589.5 838.7s57.4-4.4 61.7-4.4c4.5-.1 7.5 10 2 12.9s-46.4 10.7-63.1 10c-5-.2-5.6-14-.6-18.5z" />
                    <path
                        d="M644.8 851.3c3.4-1 5.8-2.2 6.9-3.5-8.6 3-40.6 9-57.6 9.3l.1 1.4s4.9-.4 12.8-1.1c11.6-1.1 28.2-3.1 37.8-6.1z" />
                    <g>
                        <path fill="#f0f0f0"
                            d="M1192.5 425h63.9v27.2h-63.9zM1115.2 425h63.9v27.2h-63.9zM1153.8 462.9h63.9v27.2h-63.9z" />
                    </g>
                    <g>
                        <path fill="#f0f0f0"
                            d="M167.7 259.7h63.9v27.2h-63.9zM206.3 297.5h63.9v27.2h-63.9zM129 297.5h63.9v27.2H129z" />
                    </g>
                    <g>
                        <path fill="#e1e1e1" d="M849.3 218.3h327.3v16.8H849.3z" />
                        <path fill="#ececec"
                            d="M934.1 156.3h14.4v62h-14.4zM1013.469 157.325l14.191-2.446 10.528 61.101-14.191 2.446zM882.2 164.5h14.4v53.8h-14.4zM999 164.5h14.4v53.8H999zM953.344 165.803l14.057-3.124 11.67 52.52-14.058 3.123zM901.9 153.3h7.2v65.1h-7.2zM987.7 153.3h7.2v65.1h-7.2zM1049.6 169.3h70.3v48.5h-70.3z" />
                    </g>
                    <g>
                        <path fill="#e1e1e1" d="M1169.847 110.954h-327.3v-16.8h327.3z" />
                        <path fill="#ececec"
                            d="M1154.833 94.14h-14.4v-62h14.4zM1085.07 94.14h-14.4v-62h14.4zM995.206 94.213l-14.191-2.445 10.527-61.1 14.192 2.444zM1103.8 94.21h-14.4v-53.8h14.4zM1020.167 94.21h-14.4v-53.8h14.4zM1117.244 94.162h-7.2v-65.1h7.2zM1031.49 94.162h-7.2v-65.1h7.2z" />
                    </g>
                    <g>
                        <circle transform="matrix(.998 -.06263 .06263 .998 -3.267 20.564)" fill="#e1e1e1"
                            cx="326.4" cy="62.4" r="62.4" />
                        <circle fill="#f0f0f0" cx="326.4" cy="62.4" r="53.1" />
                        <path
                            style="fill:#f0f0f0;stroke:#e1e1e1;stroke-width:5.2981;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10"
                            d="M328.9 26v37.1l30.6-.7" />
                    </g>
                    <g>
                        <path transform="rotate(-180 514.115 289.55)" style="fill:#fff"
                            d="M513.9 287.6h.5v3.9h-.5z" />
                        <path
                            d="M445.7 260.4h143.1c9.9 0 17.9 8 17.9 17.9V351c0 9.9-8 17.9-17.9 17.9h-6.3l3.8 25.3-39.2-25.3H445.7c-9.9 0-17.9-8-17.9-17.9v-72.7c0-9.9 8-17.9 17.9-17.9z"
                            style="fill:none;stroke:#fa8617;stroke-width:2;stroke-miterlimit:10" />
                    </g>
                    <path
                        d="M745.5 326.8c-2.7-4.9-6.6-8.4-11.6-10.3-2.4-1.2-5.3-2.1-8.9-2.8l.3-.1c-1.6-4.9-4.8-8.4-9.5-10.5-18.1-8-53.6 8.2-54 8.4-.2.1-.3.1-.5.2-5.5 2.1-13.4-4.4-20.2 1-2 1.5-2.8 4.8-2.6 8.5-.4 4.2-.1 9.6 3.3 13.9 3.8 4.8 10.7 7.3 20.3 7.3 1.9 0 3.9-.1 6.1-.3 13.7 1.3 29.6 1.2 40.6 3.6 1.8.9 3.7 2 5.5 3.5 5.8 4.7 9.6 11.6 11.2 20.3.6 4.9 1.4 9.8 1.4 9.8l2.3.6c-.1-1.2-.1-2.4-.2-3.9-.2-6.5-.5-13.3 4.8-13.5.9 0 1.9.1 2.7.4l1.5.6c.2.1.4.3.7.4.2.1.4.3.7.5.2.2.4.3.6.5l.6.6c.2.2.4.4.6.7.2.2.3.5.5.7l.9 1.5c.1.2.2.5.3.8l.6 1.8c.1.3.1.6.2.9.1.4.1.8.2 1.1 0 .3 0 .6.1.9 0 .7 0 1.4-.1 2.1-.1.5-.1 1-.3 1.5 0 0 .4-.5.5-.7.9-2.4 1.7-5.6 2.3-9.2 3.6-12.5 5.4-29.2-.9-40.8zm-30.1-23.1c3.9 1.7 6.7 4.4 8.4 8.1-3.1-4.3-14-14.1-45.1-6 11.7-3.5 26.9-6.5 36.7-2.1zm-73.2 30.9c-2.3-2.9-3.2-6.4-3.3-9.7.9 4 3 8 6.3 10.9 2.4 2.1 6.2 3.2 10.3 4.2 2.7.6 5.6 1.1 8.7 1.5-10.6.4-18-1.9-22-6.9zm68.8 11.5c.7.2 1.5.4 2.1.6 3.8 1.3 10.9 8.7 11.3 14.4 0 .7.1 1.6.3 2.7-3-9.3-8.4-14.6-13.7-17.7zm28-26c2.4 1.8 4.3 4.2 5.9 7 5.4 9.9 4.7 23.9 1.9 35.4 1.2-10.2 1-21.8-1.1-28.2-1.6-5-2.7-10.1-6.7-14.2z" />
                    <g>
                        <path d="M136.2 871.3s-17.8-108.5 0-141.7c0-.1 16.9 59.7 0 141.7z" style="fill:#96d69a" />
                        <path fill="#31af43" d="M136 866.4s-6.3-109.8-30.9-138.3c.1 0-3.4 62 30.9 138.3z" />
                        <path fill="#31af43" d="M135.2 866.4s.5-97.9 21-124.4c0 0 5.9 55-21 124.4z" />
                        <path style="fill:#757354" d="m168.1 856-15.9 84.6h-25.8L98 856z" />
                    </g>
                    <path fill="#f0f0f0"
                        d="M448.9 289.6h63.9v8.2h-63.9zM448.9 308.2H581v8.2H448.9zM448.9 326.9H581v8.2H448.9z" />
                </svg>
            </div>
            <div class="col-md-12">
                <a class="btn btn-success rounded-pill px-4" href="{{ route('plans.list') }}">@lang('tools.subscribeNow')</a>
            </div>
        </div>
    @endif
</x-user-profile>