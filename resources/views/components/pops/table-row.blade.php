<tr {{ $attributes->merge(['class' => '']) }} class="justify-center">
    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{$pop->number}}</td>
    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><a href="{{ route('pops.show', $pop) }}">{{$pop->name}}</a></td>
    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{$pop->series}}</td>
    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{$pop->category}}</td>

</tr>
