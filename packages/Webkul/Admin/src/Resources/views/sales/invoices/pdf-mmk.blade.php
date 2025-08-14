<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html
    lang="{{ app()->getLocale() }}"
    dir="{{ core()->getCurrentLocale()->direction }}"
>
    <head>
        <!-- meta tags -->
        <meta http-equiv="Cache-control" content="no-cache">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        @php
            $fontPath = [];
            
            $fontFamily = [
                'regular' => 'Arial, sans-serif',
                'bold'    => 'Arial, sans-serif',
            ];

            if (in_array(app()->getLocale(), ['ar', 'he', 'fa', 'tr', 'ru', 'uk'])) {
                $fontFamily = [
                    'regular' => 'DejaVu Sans',
                    'bold'    => 'DejaVu Sans',
                ];
            } elseif (app()->getLocale() == 'zh_CN') {
                $fontPath = [
                    'regular' => asset('fonts/NotoSansSC-Regular.ttf'),
                    'bold'    => asset('fonts/NotoSansSC-Bold.ttf'),
                ];
                
                $fontFamily = [
                    'regular' => 'Noto Sans SC',
                    'bold'    => 'Noto Sans SC Bold',
                ];
            } elseif (app()->getLocale() == 'ja') {
                $fontPath = [
                    'regular' => asset('fonts/NotoSansJP-Regular.ttf'),
                    'bold'    => asset('fonts/NotoSansJP-Bold.ttf'),
                ];
                
                $fontFamily = [
                    'regular' => 'Noto Sans JP',
                    'bold'    => 'Noto Sans JP Bold',
                ];
            } elseif (app()->getLocale() == 'hi_IN') {
                $fontPath = [
                    'regular' => asset('fonts/Hind-Regular.ttf'),
                    'bold'    => asset('fonts/Hind-Bold.ttf'),
                ];
                
                $fontFamily = [
                    'regular' => 'Hind',
                    'bold'    => 'Hind Bold',
                ];
            } elseif (app()->getLocale() == 'bn') {
                $fontPath = [
                    'regular' => asset('fonts/NotoSansBengali-Regular.ttf'),
                    'bold'    => asset('fonts/NotoSansBengali-Bold.ttf'),
                ];
                
                $fontFamily = [
                    'regular' => 'Noto Sans Bengali',
                    'bold'    => 'Noto Sans Bengali Bold',
                ];
            } elseif (app()->getLocale() == 'sin') {
                $fontPath = [
                    'regular' => asset('fonts/NotoSansSinhala-Regular.ttf'),
                    'bold'    => asset('fonts/NotoSansSinhala-Bold.ttf'),
                ];
                
                $fontFamily = [
                    'regular' => 'Noto Sans Sinhala',
                    'bold'    => 'Noto Sans Sinhala Bold',
                ];
            }
        @endphp

        <!-- lang supports inclusion -->
        <style type="text/css">
            @if (! empty($fontPath['regular']))
                @font-face {
                    src: url({{ $fontPath['regular'] }}) format('truetype');
                    font-family: {{ $fontFamily['regular'] }};
                }
            @endif
            
            @if (! empty($fontPath['bold']))
                @font-face {
                    src: url({{ $fontPath['bold'] }}) format('truetype');
                    font-family: {{ $fontFamily['bold'] }};
                    font-style: bold;
                }
            @endif
            
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: {{ $fontFamily['regular'] }};
            }

            body {
                font-size: 10px;
                /* color: #091341; */
                color: #0f0f0f;
                font-family: "{{ $fontFamily['regular'] }}";
            }

            b, th {
                font-family: "{{ $fontFamily['bold'] }}";
            }

            .page-content {
                padding: 12px;
            }

            .page-header {
                border-bottom: 1px solid #E9EFFC;
                text-align: center;
                font-size: 24px;
                text-transform: uppercase;
                /* color: #000DBB; */
                color: #0f0f0f;
                padding: 24px 0;
                margin: 0;
            }

            .logo-container {
                position: absolute;
                top: 20px;
                left: 20px;
            }

            .logo-container.rtl {
                left: auto;
                right: 20px;
            }

            .logo-container img {
                max-width: 100%;
                height: auto;
            }

            .page-header b {
                display: inline-block;
                vertical-align: middle;
            }

            .small-text {
                font-size: 7px;
            }

            table {
                width: 100%;
                border-spacing: 1px 0;
                border-collapse: separate;
                margin-bottom: 16px;
            }
            
            table thead th {
                /* background-color: #E9EFFC;
                color: #000DBB; */
                background-color: #0f0f0f;
                color: #fff6e2;
                padding: 6px 18px;
                text-align: left;
            }

            table.rtl thead tr th {
                text-align: right;
            }

            table tbody td {
                padding: 9px 18px;
                border-bottom: 1px solid #E9EFFC;
                text-align: left;
                vertical-align: top;
            }

            table.rtl tbody tr td {
                text-align: right;
            }

            .summary {
                width: 100%;
                display: inline-block;
            }

            .summary table {
                float: right;
                width: 250px;
                padding-top: 5px;
                padding-bottom: 5px;
                background-color: #E9EFFC;
                white-space: nowrap;
            }

            .summary table.rtl {
                width: 280px;
            }

            .summary table.rtl {
                margin-right: 480px;
            }

            .summary table td {
                padding: 5px 10px;
            }

            .summary table td:nth-child(2) {
                text-align: center;
            }

            .summary table td:nth-child(3) {
                text-align: right;
            }
        </style>
    </head>
    <body dir="{{ core()->getCurrentLocale()->direction }}">
        <div class="logo-container {{ core()->getCurrentLocale()->direction }}">
            @if (core()->getConfigData('sales.invoice_settings.pdf_print_outs.logo'))
                <img src="data:image/png;base64,{{ base64_encode(file_get_contents(Storage::url(core()->getConfigData('sales.invoice_settings.pdf_print_outs.logo')))) }}"/>
            @else
                <img width="130" height="36" src="data:image/png;base64,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"/>
            @endif
        </div>
        
        <div class="page">
            <!-- Header -->
            <div class="page-header">
                <b>@lang('admin::app.sales.invoices.invoice-pdf.invoice')</b>
            </div>

            <div class="page-content">
                <!-- Invoice Information -->
                <table class="{{ core()->getCurrentLocale()->direction }}">
                    <tbody>
                        <tr>
                            @if (core()->getConfigData('sales.invoice_settings.pdf_print_outs.invoice_id'))
                                <td style="width: 50%; padding: 2px 18px;border:none;">
                                    <b>
                                        @lang('admin::app.sales.invoices.invoice-pdf.invoice-id'):
                                    </b>

                                    <span>
                                        #{{ $invoice->increment_id ?? $invoice->id }}
                                    </span>
                                </td>
                            @endif

                            @if (core()->getConfigData('sales.invoice_settings.pdf_print_outs.order_id'))
                                <td style="width: 50%; padding: 2px 18px;border:none;">
                                    <b>
                                        @lang('admin::app.sales.invoices.invoice-pdf.order-id'): 
                                    </b>

                                    <span>
                                        #{{ $invoice->order->increment_id }}
                                    </span>
                                </td>
                            @endif
                        </tr>
                        
                        <tr>
                            <td style="width: 50%; padding: 2px 18px;border:none;">
                                <b>
                                    @lang('admin::app.sales.invoices.invoice-pdf.date'):
                                </b>

                                <span>
                                    {{ core()->formatDate($invoice->created_at, 'd-m-Y') }}
                                </span>
                            </td>

                            <td style="width: 50%; padding: 2px 18px;border:none;">
                                <b>
                                    @lang('admin::app.sales.invoices.invoice-pdf.order-date'):
                                </b>

                                <span>
                                    {{ core()->formatDate($invoice->order->created_at, 'd-m-Y') }}
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <!-- Invoice Information -->
                <table class="{{ core()->getCurrentLocale()->direction }}">
                    <tbody>
                        <tr>
                            @if (! empty(core()->getConfigData('sales.shipping.origin.country')))
                                <td style="width: 50%; padding: 2px 18px;border:none;">
                                    <b style="display: inline-block; margin-bottom: 4px;">
                                        {{ core()->getConfigData('sales.shipping.origin.store_name') }}
                                    </b>

                                    <div>
                                        <div>{{ core()->getConfigData('sales.shipping.origin.address') }}</div>

                                        <div>{{ core()->getConfigData('sales.shipping.origin.zipcode') . ' ' . core()->getConfigData('sales.shipping.origin.city') }}</div>

                                        <div>{{ core()->getConfigData('sales.shipping.origin.state') . ', ' . core()->getConfigData('sales.shipping.origin.country') }}</div>
                                    </div>
                                </td>
                            @endif

                            <td style="width: 50%; padding: 2px 18px;border:none;">
                                @if ($invoice->hasPaymentTerm())
                                    <div style="margin-bottom: 12px">
                                        <b style="display: inline-block; margin-bottom: 4px;">
                                            @lang('admin::app.sales.invoices.invoice-pdf.payment-terms'):
                                        </b>

                                        <span>
                                            {{ $invoice->getFormattedPaymentTerm() }}
                                        </span>
                                    </div>
                                @endif

                                @if (core()->getConfigData('sales.shipping.origin.bank_details'))
                                    <div>
                                        <b style="display: inline-block; margin-bottom: 4px;">
                                            @lang('admin::app.sales.invoices.invoice-pdf.bank-details'):
                                        </b>

                                        <div>
                                            {!! nl2br(core()->getConfigData('sales.shipping.origin.bank_details')) !!}
                                        </div>
                                    </div>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>

                <!-- Billing & Shipping Address -->
                <table class="{{ core()->getCurrentLocale()->direction }}">
                    <thead>
                        <tr>
                            @if ($invoice->order->billing_address)
                                <th style="width: 50%;">
                                    <b>
                                        @lang('admin::app.sales.invoices.invoice-pdf.bill-to')
                                    </b>
                                </th>
                            @endif

                            @if ($invoice->order->shipping_address)
                                <th style="width: 50%">
                                    <b>
                                        @lang('admin::app.sales.invoices.invoice-pdf.ship-to')
                                    </b>
                                </th>
                            @endif
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            @if ($invoice->order->billing_address)
                                <td style="width: 50%">
                                    <div>{{ $invoice->order->billing_address->company_name ?? '' }}<div>

                                    <div>{{ $invoice->order->billing_address->name }}</div>

                                    <div>{{ $invoice->order->billing_address->address }}</div>

                                    <div>{{ $invoice->order->billing_address->postcode . ' ' . $invoice->order->billing_address->city }}</div>

                                    <div>{{ $invoice->order->billing_address->state . ', ' . core()->country_name($invoice->order->billing_address->country) }}</div>

                                    <div>@lang('admin::app.sales.invoices.invoice-pdf.contact'): {{ $invoice->order->billing_address->phone }}</div>
                                </td>
                            @endif
                            
                            @if ($invoice->order->shipping_address)
                                <td style="width: 50%">
                                    <div>{{ $invoice->order->shipping_address->company_name ?? '' }}<div>

                                    <div>{{ $invoice->order->shipping_address->name }}</div>

                                    <div>{{ $invoice->order->shipping_address->address }}</div>

                                    <div>{{ $invoice->order->shipping_address->postcode . ' ' . $invoice->order->shipping_address->city }}</div>

                                    <div>{{ $invoice->order->shipping_address->state . ', ' . core()->country_name($invoice->order->shipping_address->country) }}</div>

                                    <div>@lang('admin::app.sales.invoices.invoice-pdf.contact'): {{ $invoice->order->shipping_address->phone }}</div>
                                </td>
                            @endif
                        </tr>
                    </tbody>
                </table>

                <!-- Payment & Shipping Methods -->
                <table class="{{ core()->getCurrentLocale()->direction }}">
                    <thead>
                        <tr>
                            <th style="width: 50%">
                                <b>
                                    @lang('admin::app.sales.invoices.invoice-pdf.payment-method')
                                </b>
                            </th>

                            @if ($invoice->order->shipping_address)
                                <th style="width: 50%">
                                    <b>
                                        @lang('admin::app.sales.invoices.invoice-pdf.shipping-method')
                                    </b>
                                </th>
                            @endif
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td style="width: 50%">
                                {{ core()->getConfigData('sales.payment_methods.' . $invoice->order->payment->method . '.title') }}

                                @php $additionalDetails = \Webkul\Payment\Payment::getAdditionalDetails($invoice->order->payment->method); @endphp

                                @if (! empty($additionalDetails))
                                    <div class="row small-text">
                                        <span>{{ $additionalDetails['title'] }}:</span>
                                        
                                        <span>{{ $additionalDetails['value'] }}</span>
                                    </div>
                                @endif
                            </td>

                            @if ($invoice->order->shipping_address)
                                <td style="width: 50%">
                                    {{ $invoice->order->shipping_title }}
                                </td>
                            @endif
                        </tr>
                    </tbody>
                </table>

                <!-- Items -->
                <div class="items">
                    <table class="{{ core()->getCurrentLocale()->direction }}">
                        <thead>
                            <tr>
                                <th>
                                    @lang('admin::app.sales.invoices.invoice-pdf.sku')
                                </th>

                                <th>
                                    @lang('admin::app.sales.invoices.invoice-pdf.product-name')
                                </th>

                                <th>
                                    @lang('admin::app.sales.invoices.invoice-pdf.price')
                                </th>
        
                                <th>
                                    @lang('admin::app.sales.invoices.invoice-pdf.qty')
                                </th>

                                <th>
                                    @lang('admin::app.sales.invoices.invoice-pdf.subtotal')
                                </th>

                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($invoice->items as $item)
                                <tr>
                                    <td>
                                        {{ $item->getTypeInstance()->getOrderedItem($item)->sku }}
                                    </td>

                                    <td>
                                        {{ $item->name }}

                                        @if (isset($item->additional['attributes']))
                                            <div>
                                                @foreach ($item->additional['attributes'] as $attribute)
                                                    <b>{{ $attribute['attribute_name'] }} : </b>{{ $attribute['option_label'] }}</br>
                                                @endforeach
                                            </div>
                                        @endif
                                    </td>

                                    @if (core()->getAllCurrencies()->where('code', 'MMK')?->first()?->code === 'MMK')
                                        <td>
                                            @if (core()->getConfigData('sales.taxes.sales.display_prices') == 'including_tax')
                                                {!! core()->formatPrice(core()->convertPrice($item->base_price_incl_tax, 'MMK'), 'MMK') !!}
                                            @elseif (core()->getConfigData('sales.taxes.sales.display_prices') == 'both')
                                                {!! core()->formatPrice(core()->convertPrice($item->base_price_incl_tax, 'MMK'), 'MMK') !!}
                                                
                                                <div class="small-text">
                                                    @lang('admin::app.sales.invoices.invoice-pdf.excl-tax')
                                                    
                                                    <span>
                                                        {{ core()->formatPrice(core()->convertPrice($item->base_price, 'MMK'), 'MMK') }}
                                                    </span>
                                                </div>
                                            @else
                                                {!! core()->formatPrice(core()->convertPrice($item->base_price, 'MMK'), 'MMK') !!}
                                            @endif
                                        </td>
                                    @endif
                                    <td>
                                        {{ $item->qty }}
                                    </td>
                                   
                                    <td>
                                        @if (core()->getConfigData('sales.taxes.sales.display_subtotal') == 'including_tax')      
                                            {!! core()->formatPrice(core()->convertPrice($item->base_total_incl_tax, 'MMK'), 'MMK') !!}
                                        @elseif (core()->getConfigData('sales.taxes.sales.display_subtotal') == 'both')
                                            {!! core()->formatPrice(core()->convertPrice($item->base_total_incl_tax, 'MMK'), 'MMK') !!}
                                            
                                            <div class="small-text">
                                                @lang('admin::app.sales.invoices.invoice-pdf.excl-tax')
                                                
                                                <span>
                                                    {{ core()->formatPrice(core()->convertPrice($item->base_total, 'MMK'), 'MMK') }}
                                                </span>
                                            </div>
                                        @else
                                            {!! core()->formatPrice(core()->convertPrice($item->base_total, 'MMK'), 'MMK') !!}
                                        @endif
                                    </td>
                            
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Summary Table -->
                <div class="summary">
                    <table class="{{ core()->getCurrentLocale()->direction }}">
                        <tbody>
                            @if (core()->getConfigData('sales.taxes.sales.display_subtotal') == 'including_tax')
                                <tr>
                                    <td>@lang('admin::app.sales.invoices.invoice-pdf.subtotal')</td>
                                    <td>-</td>
                                    <td>                                       
                                        {!! core()->formatPrice(core()->convertPrice($invoice->base_sub_total_incl_tax, 'MMK'), 'MMK') !!}
                                    </td>
                                </tr>
                            @elseif (core()->getConfigData('sales.taxes.sales.display_subtotal') == 'both')
                                <tr>
                                    <td>@lang('admin::app.sales.invoices.invoice-pdf.subtotal-incl-tax')</td>
                                    <td>-</td>
                                    <td>                                      
                                        {!! core()->formatPrice(core()->convertPrice($invoice->base_sub_total_incl_tax, 'MMK'), 'MMK') !!}
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>@lang('admin::app.sales.invoices.invoice-pdf.subtotal-excl-tax')</td>
                                    <td>-</td>
                                    <td>                                       
                                        {!! core()->formatPrice(core()->convertPrice($invoice->base_sub_total, 'MMK'), 'MMK') !!}
                                    </td>
                                </tr>
                            @else
                                <tr>
                                    <td>@lang('admin::app.sales.invoices.invoice-pdf.subtotal')</td>
                                    <td>-</td>
                                    <td>                                       
                                        {!! core()->formatPrice(core()->convertPrice($invoice->base_sub_total, 'MMK'), 'MMK') !!}
                                    </td>
                                </tr>
                            @endif

                            @if (core()->getConfigData('sales.taxes.sales.display_shipping_amount') == 'including_tax')
                                <tr>
                                    <td>@lang('admin::app.sales.invoices.invoice-pdf.shipping-handling')</td>
                                    <td>-</td>
                                    <td>                                        
                                        {!! core()->formatPrice(core()->convertPrice($invoice->base_shipping_amount_incl_tax, 'MMK'), 'MMK') !!}
                                    </td>
                                </tr>
                            @elseif (core()->getConfigData('sales.taxes.sales.display_shipping_amount') == 'both')
                                <tr>
                                    <td>@lang('admin::app.sales.invoices.invoice-pdf.shipping-handling-incl-tax')</td>
                                    <td>-</td>
                                    <td>                                       
                                        {!! core()->formatPrice(core()->convertPrice($invoice->base_shipping_amount_incl_tax, 'MMK'), 'MMK') !!}
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>@lang('admin::app.sales.invoices.invoice-pdf.shipping-handling-excl-tax')</td>
                                    <td>-</td>
                                    <td>                                       
                                        {!! core()->formatPrice(core()->convertPrice($invoice->base_shipping_amount, 'MMK'), 'MMK') !!}
                                    </td>
                                </tr>
                            @else
                                <tr>
                                    <td>@lang('admin::app.sales.invoices.invoice-pdf.shipping-handling')</td>
                                    <td>-</td>
                                    <td>                                     
                                        {!! core()->formatPrice(core()->convertPrice($invoice->base_shipping_amount, 'MMK'), 'MMK') !!}
                                    </td>
                                </tr>
                            @endif

                            <tr>
                                <td>@lang('admin::app.sales.invoices.invoice-pdf.tax')</td>
                                <td>-</td>
                                <td>                                   
                                    {!! core()->formatPrice(core()->convertPrice($invoice->base_tax_amount, 'MMK'), 'MMK') !!}
                                </td>
                            </tr>

                            <tr>
                                <td>@lang('admin::app.sales.invoices.invoice-pdf.discount')</td>
                                <td>-</td>
                                <td>                                  
                                    {!! core()->formatPrice(core()->convertPrice($invoice->base_discount_amount, 'MMK'), 'MMK') !!}
                                </td>
                            </tr>

                            <tr>
                                <td style="border-top: 1px solid #FFFFFF;">
                                    <b>@lang('admin::app.sales.invoices.invoice-pdf.grand-total')</b>
                                </td>
                                <td style="border-top: 1px solid #FFFFFF;">-</td>
                                <td style="border-top: 1px solid #FFFFFF;">
                                    <b>{!! core()->formatPrice(core()->convertPrice($invoice->base_grand_total, 'MMK'), 'MMK') !!}</b>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
