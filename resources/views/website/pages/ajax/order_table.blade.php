@php
    $total_qty = 0;
    $count = 0;
    $lang = session()->get('locale');

@endphp

@foreach ($cart['cart'] as $key => $item)
    @php
        $total_qty += $item['quantity'];
        $count++;
    @endphp
    <tr>
        <td class="text-center">{{ $item['price'] }}</td>
        <td class="text-center">{{ $item['quantity'] }}</td>
        @if ($lang == 'he')
            <td class="text-left">{{ $item['attributes']['name_in_he'] ?? '' }}</td>
        @endif
        @if ($lang == 'en')
            <td class="text-left">{{ $item['name'] ?? '' }}</td>
        @endif
        <td class="text-center">{{ $count }}</td>
    </tr>
@endforeach


<tr>
    <td class="text-center"><Strong>{{ $cart['total'] }}</Strong></td>
    <td class="text-center"><Strong>{{ $total_qty }}<Strong></td>
    <td class="text-center"></td>
    @if ($lang == 'he')
        <td class="text-center"> <Strong>{{ __('home.total') }}</Strong></td>
    @endif
    @if ($lang == 'en')
        <td class="text-left"> <Strong>{{ __('home.total') }}</Strong></td>
    @endif

</tr>
