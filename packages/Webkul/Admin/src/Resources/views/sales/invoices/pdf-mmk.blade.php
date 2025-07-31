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
                color: #091341;
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
                color: #000DBB;
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
                background-color: #E9EFFC;
                color: #000DBB;
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
                <img src="data:image/png;base64,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"/>
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
