<tr>
    <td>{{ $sellable->title }}</td>
    <td>{{ $cartItem->getQuantity() }}</td>
    <td><x-tipoff-money :amount="$cartItem->getAmountEach()->getOriginalAmount()"/></td>
    <td><x-tipoff-money :amount="$cartItem->getAmountEach()->getDiscounts()"/></td>
    <td><x-tipoff-money :amount="$cartItem->getAmountTotal()->getDiscountedAmount()"/></td>
</tr>
