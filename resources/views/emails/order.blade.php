<h3>You Have a New Order From The Website</h3>

<div style="font-size: 15px;">

    <p>Customer's Full Name: {{ $name }}</p>
    <p>Customer's Email: {{ $email }}</p>
    <p>Customer's Phone: {{ $phone }}</p>
    <p>Customer's Address: {{ $address }}</p>

    <h4>Product Ordered:</h4>
    <table class="table table-bordered">
        <thead>
        <th style="text-align: center;">Product</th>
        <th style="text-align: center;">Quantity</th>
        <th style="text-align: center;">Total</th>
        </thead>

        <tbody>

        @foreach(Cart::content() as $item)

            <tr>
                <td width="25%">{{ $item->name }}</td>
                <td width="25%">x {{ $item->qty }}</td>
                <td width="50%" class="color">${{ $item->price }}</td>
            </tr>

        @endforeach

        <tr>
            <td>Total</td>
            <td></td>
            <td class="color">
                <strong>${{ Cart::subtotal() }}</strong>
            </td>
        </tr>

        </tbody>
    </table>

</div>