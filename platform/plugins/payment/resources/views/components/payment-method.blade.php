@props([
    'name',
    'label' => null,
    'description' => null,
    'paymentName' => null,
    'supportedCurrencies' => [],
])

@php
    $isSelected = PaymentMethods::getSelectingMethod() === $name;
    $id = sprintf('payment-%s', $name);
@endphp

<li class="list-group-item payment-method-item">
    <input
        class="magic-radio js_payment_method"
        id="{{ $id }}"
        name="payment_method"
        type="radio"
        value="{{ $name }}"
        @checked($isSelected)
    >
    <label for="{{ $id }}">
        {{ $label ?: get_payment_setting('name', $name) }}
    </label>

    <div @class(['payment_collapse_wrap collapse mt-1', 'show' => $isSelected])>
        <p>{!! BaseHelper::clean($description ?: get_payment_setting('description', $name)) !!}</p>

        {{ $slot }}

        @if (
            ! empty($supportedCurrencies)
            && ! in_array(get_application_currency()->title, $supportedCurrencies)
            && ! get_application_currency()->replicate()->newQuery()->whereIn('title', $supportedCurrencies)->exists()
        )
            @php
                $currencies = get_all_currencies()->filter(fn ($item) => in_array($item->title, $supportedCurrencies));
            @endphp

            <div class="alert alert-warning mt-3">
                {{ __(":name doesn't support :currency. List of currencies supported by :name: :currencies.", ['name' => $paymentName, 'currency' => get_application_currency()->title, 'currencies' => implode(', ', $supportedCurrencies)]) }}

                {{ $currencyNotSupportedMessage ?? '' }}

                @if ($currencies->isNotEmpty())
                    <div>
                        {{ __('Please switch currency to any supported currency') }}:&nbsp;&nbsp;
                        @foreach ($currencies as $currency)
                            <a
                                href="{{ route('public.change-currency', $currency->title) }}"
                                @class(['active' => get_application_currency_id() === $currency->getKey()])
                            >
                                {{ $currency->title }}
                            </a>
                            @if (!$loop->last)
                                &nbsp; | &nbsp;
                            @endif
                        @endforeach
                    </div>
                @endif
            </div>
        @endif
    </div>

    @if ($logo = get_payment_setting('logo', $name))
        <div class="payment-method-logo">
            {{ RvMedia::image(get_payment_setting('logo', $name)) }}
        </div>
    @endif
</li>
