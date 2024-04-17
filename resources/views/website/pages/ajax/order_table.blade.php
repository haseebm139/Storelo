
@php
    $total_qty = 0;
    $count = 0;
@endphp
@foreach ($cart['cart'] as $key => $item)
    @php
        $total_qty += $item['quantity'];
        $count++
    @endphp
    <tr>
        <td class="text-center">{{ $count  }}</td>
        <td class="text-left">{{ $item['name'] }}</td>
        <td class="text-center">{{ $item['quantity'] }}</td>
        <td class="text-center">{{ $item['price'] }}</td>
    </tr>
@endforeach


<tr>
    <td class="text-left"> <Strong>Total</Strong></td>
    <td class="text-center"></td>
    <td class="text-center"><Strong>{{ $total_qty }}<Strong></td>
    <td class="text-center"><Strong>{{ $cart['total'] }}</Strong></td>
</tr>
