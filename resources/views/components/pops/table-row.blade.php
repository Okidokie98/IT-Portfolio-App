<tr {{ $attributes->merge(['class' => '']) }} class="justify-center">
    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{$pop->name}}</td>
    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{$pop->series}}</td>
    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{$pop->number}}</td>
    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{$pop->category}}</td>
    <td> <a href="{{ route('pops.show', $pop) }}" class="inline-block m-2 p-2 text-white bg-blue-500 hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 rounded-md">Info</a></td>
</tr>
