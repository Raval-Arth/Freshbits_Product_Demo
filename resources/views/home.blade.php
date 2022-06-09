@extends('layouts.app-tailwind')

@section('content')
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="px-4 sm:px-6 lg:px-8">
        <main class="main-section">
            <div class="sm:flex sm:items-center">
                <div class="sm:flex-auto">
                    <h1 class="text-xl font-semibold text-gray-900">Products</h1>
                    <p class="mt-2 text-sm text-gray-700">A list of all the products in your account including their Name,
                        UPC Code,
                        Image, Price and Status.</p>
                </div>
                <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                    <button type="button"
                        class="delete-product inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">Delete
                        Product</button>
                    <button type="button"
                        class="add-product inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">Add
                        Product</button>
                </div>
            </div>

            <div class="mt-8 flex flex-col">
                <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                        <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-300">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="sr-only">checkbox
                                        </th>
                                        <th scope="col"
                                            class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                                            Image
                                        </th>
                                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                            UPC
                                        </th>
                                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                            Name
                                        </th>
                                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                            Price
                                        </th>
                                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                            Status
                                        </th>
                                        <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                            <span class="sr-only">Edit</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id='product-table' class="divide-y divide-gray-200 bg-white">
                                    @if (!empty($products))
                                        @foreach ($products as $item)
                                            <tr>
                                                <td class="pl-5">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                </td>
                                                <td
                                                    class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                    <img src={{ $item->image }} alt="" class='w-20 h-20 rounded-xl'>
                                                </td>
                                                <td class="hidden product_upc_code">{{ $item->upc }}</td>
                                                <td class=" whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                    <div class="mb-3">
                                                        <div class="mb-3">{!! DNS1D::getBarcodeHTML($item->upc, 'UPCA') !!}</div>
                                                </td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                    {{ $item->name }}</td>
                                                </td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                    {{ $item->price }}</td>
                                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                    {{ $item->status == 1 ? 'Acive' : 'Deactive' }}</td>
                                                <td
                                                    class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                                    <a href="#" class="edit-product text-indigo-600 hover:text-indigo-900">
                                                        <div onclick="editProduct({{ $item->id }})">Edit</div> <span
                                                            class="sr-only">, Lindsay Walton</span>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    <!-- More people... -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        {{-- Start Add Product --}}
        <form action="/home" method="POST" class="add-product-form md:w-1/2 mx-auto space-y-8 "
            enctype="multipart/form-data">
            @csrf
            <div class="space-y-8  sm:space-y-5">
                <div>
                    <div>
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Add Product</h3>
                    </div>

                    <div class="mt-6 sm:mt-5 space-y-6 sm:space-y-5  divide-y divide-gray-200">
                        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="product_name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                Product Name </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <div class="max-w-lg flex rounded-md shadow-sm">

                                    <input type="text" name="product_name" id="product_name" autocomplete="product_name"
                                        class="flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0  rounded-md sm:text-sm border-gray-300">
                                </div>
                            </div>
                        </div>
                        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="product_price" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                Product
                                Price
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <div class="max-w-lg flex rounded-md shadow-sm">
                                    <input type="number" step="0.01" name="product_price" id="product_price"
                                        class="flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0  rounded-md sm:text-sm border-gray-300">
                                </div>
                            </div>
                        </div>

                        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="Status" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Status
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <select id="product_status" name="product_status" autocomplete="product_status"
                                    class="max-w-lg py-2 px-2 block focus:ring-indigo-500 focus:border-indigo-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                    <option>Active</option>
                                    <option>Deactive</option>
                                </select>
                            </div>
                        </div>

                        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="cover-photo" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Cover
                                photo </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <div
                                    class="max-w-lg flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                    <div class="space-y-1 text-center">
                                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                                            viewBox="0 0 48 48" aria-hidden="true">
                                            <path
                                                d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <div class="text-sm text-gray-600">
                                            <label for="file-upload"
                                                class="cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                <span>Upload a file</span>
                                                <input id="file-upload" name="image" type="file" class="sr-only">
                                            </label>
                                        </div>
                                        <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pt-5">
                <div class="flex justify-end">
                    <button type="button"
                        class="cancel-add-product bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Cancel</button>
                    <button type="submit"
                        class="save-product ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
                </div>
            </div>
        </form>
        {{-- End Add Product --}}


        {{-- Start Edit Product Form --}}
        <div class="edit-product-form md:w-1/2 mx-auto space-y-8">
            @csrf
            <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
                <div>
                    <div>
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Edit Product</h3>
                    </div>

                    <div class="mt-6 sm:mt-5 space-y-6 sm:space-y-5">
                        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="product_name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                Product Name </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <div class="max-w-lg flex rounded-md shadow-sm">
                                    <input type="text" id="product_name" autocomplete="product_name"
                                        class="edit_product_name flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0  rounded-md sm:text-sm border-gray-300">
                                </div>
                            </div>
                        </div>
                        <div
                            class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5 divide-y divide-gray-200">
                            <label for="product_price" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                Product
                                Price
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <div class="max-w-lg flex rounded-md shadow-sm">
                                    <input type="number" step="0.01" name="product_price" id="edit_product_price"
                                        class="edit_product_price flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0  rounded-md sm:text-sm border-gray-300">
                                </div>
                            </div>
                        </div>

                        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="Status" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Status
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <select id="edit_product_status" name="product_status" autocomplete="product_status"
                                    class="edit_product_status max-w-lg py-2 px-2 block focus:ring-indigo-500 focus:border-indigo-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                    <option>Active</option>
                                    <option>Deactive</option>
                                </select>
                            </div>
                        </div>

                        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="cover-photo" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Cover
                                photo </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <div
                                    class="max-w-lg flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                    <div class="space-y-1 text-center">
                                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                                            viewBox="0 0 48 48" aria-hidden="true">
                                            <path
                                                d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <div class="text-sm text-gray-600">
                                            <label for="file-upload"
                                                class="cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                <span>Upload a file</span>
                                                <input id="file-upload" name="update-image" type="file"
                                                    class="update-image">
                                            </label>
                                        </div>
                                        <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pt-5">
                <div class="flex justify-end">
                    <button type="button"
                        class="cancel-edit-product bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Cancel</button>
                    <button type="submit" onclick="updateProduct()"
                        class="update-product ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Update</button>
                </div>
            </div>
        </div>
        {{-- End Edit Product Form --}}
    </div>

    <script>
        var product_id;
        var file;
        // $(".main-section").addClass("hidden");
        $('.add-product-form').addClass('hidden');
        $('.edit-product-form').addClass('hidden');

        // Add form
        $('.add-product').click(function() {
            $(".main-section").addClass("hidden");
            $(".add-product-form").removeClass("hidden");
        });

        $('.save-product').click(function() {
            $('.add-product-form').addClass('hidden');
            $(".main-section").removeClass("hidden");
        });

        $('.cancel-add-product').click(function() {
            $('.add-product-form').addClass('hidden');
            $(".main-section").removeClass("hidden");
        });

        // Edit form
        $('.edit-product').click(function() {
            $('.main-section').addClass('hidden');
            $('.edit-product-form').removeClass('hidden');

        });

        function editProduct(el) {
            product_id = el;
            console.log(product_id);
        };

        $('.update-image').change(function() {
            file = this.files[0];
            console.log(file, "file");
        });


        $('.update-product').click(function() {
            //update product with put method
            let formdata = new FormData();
            console.log(file);
            formdata.append('product_name', $('.edit_product_name').val());
            formdata.append('product_price', $('.edit_product_price').val());
            formdata.append('product_status', $('.edit_product_status').val());
            formdata.append('image', file);
            formdata.append('_token', '{{ csrf_token() }}');
            $.ajax({
                type: 'POST',
                url: "http://{{ request()->getHttpHost() }}/product_update/" + product_id,
                contentType: false,
                processData: false,
                cache: false,
                data: formdata,
                success: function(result) {
                    console.log(result);
                    $('.edit-product-form').addClass('hidden');
                    $(".main-section").removeClass("hidden");

                    // reload the page
                    location.reload();
                },
            });

        });

        $(".delete-product").on("click", function() {
            $("input:checkbox").each(function() {
                if ($(this).is(":checked")) {
                    let product_upc_code = $(this).parent().parent().children(
                        '.product_upc_code').html();
                    $.ajax({
                        url: "http://localhost:8000/home/" + product_upc_code,
                        type: 'DELETE',
                        data: {
                            _token: "{{ csrf_token() }}",
                        },
                        success: function(result) {
                            console.log(result);
                            $('.edit-product-form').addClass('hidden');
                            $(".main-section").removeClass("hidden");

                            $(this).parent().parent().remove();
                            // console.log($(this).parent().parent().children('.product_upc_code').html());
                            location.reload();
                        }
                    });
                }
            });

        });

        $('.cancel-edit-product').click(function() {
            $('.edit-product-form').addClass('hidden');
            $(".main-section").removeClass("hidden");
        });
    </script>
@endsection
