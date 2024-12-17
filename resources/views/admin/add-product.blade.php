<x-admin-layout>
    <h1 class="text-2xl font-medium mt-12 md:mt-0">Add a product</h1>
    <p class="italic text-xs md:w-1/2 mt-4">Provide the details of the product, including its name, description, price, stock quantity, and images. Ensure images are in JPG or PNG format and do not exceed 2MB in size.</p>
    <div class="flex flex-col md:flex-row gap-5 mt-8">
        <form class="left flex-1 flex flex-col gap-6">
            <div class="">
                <label for="description" class="block text-gray-700 font-bold mb-2">Product Title</label>
                <input type="text" name="" id="" class="w-full px-3 py-2 rounded-md" placeholder="Write title here ...">
            </div>
            <div>
                <label for="description" class="block text-gray-700 font-bold mb-2">Product Description</label>
                <textarea 
                    id="description" 
                    name="description"
                    rows="8"
                    class="w-full text-sm px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-200"
                    placeholder="Write a description here ..."></textarea>
            </div>

            <div>
                <label class="block text-gray-700 font-bold mb-2">Upload Main Image</label>
                <p class="text-gray-600 mb-4 text-xs">Recommended size: 750&1150 pixels.</p>                
                <span class="text-xs text-red-600 hidden mb-2" id="main-image-alert">You can only upload 1 main photo.</span>
                <div id="main-image-dropzone" 
                     class="dropzone flex flex-row items-center justify-center gap-4 border-2 border-blue-300 border-dashed rounded-lg bg-transparent text-center cursor-pointer">
                     <i class="fas fa-image text-4xl text-gray-400"></i>
                     <span class="text-blue-400 text-xs md:text-base">Drag & drop your files here or click to browse</span>
                </div>
            </div>
            <div>
                <label class="block text-gray-700 font-bold mb-2">Upload Thumbnail Images</label>
                <p class="text-gray-600 mb-4 text-xs">Recommended size: 750&1150 pixels.</p>
                <span class="text-xs text-red-600 hidden mb-2" id="images-alert">You can't add more than 5 photos</span>
                <div id="thumbnail-image-dropzone" class="dropzone flex flex-row flex-wrap w-full items-center justify-center gap-4 border-2 border-dashed border-blue-300 rounded-lg bg-transparent text-center cursor-pointer">
                     <i class="fas fa-image text-4xl md:text-4xl text-gray-400"></i>
                     <span class="text-blue-400 text-xs md:text-base">Drag & drop your files here or click to browse</span>
                </div>
            </div>

            
        </form>
        <div class="flex flex-col gap-5">
            <div class="bg-white rounded-md py-6 px-5 md:px-10 border h-fit">
                <h3 class="text-xl text-gray-700 font-bold mb-5">Inventory</h3>
                <div class="flex flex-col gap-2 text-sm">
                    <label for="price">Regular price</label>
                    <input type="text" name="price" id="" class="py-2 px-3 border rounded-md" placeholder="€€€">
                    <label for="sale-price" class="mt-2">Sale price</label>
                    <input type="text" name="sale-price" id="" class="py-2 px-3 border rounded-md" placeholder="€€€">
                    <label for="quantity" class="mt-2">Quantity</label>
                    <input type="number" name="quantity" id="" class="py-2 px-3 border rounded-md" value="1">
                </div>
            </div>
            <div class="">
                <button class="w-full bg-blue-600 hover:bg-blue-700 duration-300 ease text-white py-2 font-medium rounded-md">Add Product</button>
            </div>
        </div>
    </div>


    <script>
        Dropzone.autoDiscover = false;

        const mainImageDropzone = new Dropzone("#main-image-dropzone", {
            url: "/",
            maxFiles: 1,
            maxFilesize: 2,
            acceptedFiles: "image/*",
            dictDefaultMessage: "",
            previewTemplate: `
                    <div class="dz-preview dz-file-preview flex flex-col items-center space-y-2">
                        <img data-dz-thumbnail class="w-24 h-24 object-cover rounded-md border border-gray-300" alt="Uploaded Image"/>
                        <div class="text-gray-600 text-sm truncate w-24 text-center" data-dz-name></div>
                        <div class="text-xs text-gray-500" data-dz-size></div>
                        <div class="dz-progress">
                            <div class="dz-upload bg-blue-500 h-1" data-dz-uploadprogress></div>
                        </div>
                        <button data-dz-remove class="dz-remove w-full text-center text-red-500 text-sm">Remove</button>
                    </div>
                `,
                init: function () {
                    this.on("addedfile", function(file) {
                        if (this.files.length > 1) {
                            this.removeFile(file);
                            const alert = document.getElementById('main-image-alert');
                            alert.style.display = "block";

                            setTimeout(() => {
                                alert.style.display = "none";
                            }, 5000);
                        }
                        const dropzoneElement = document.querySelector("#main-image-dropzone");
                        dropzoneElement.querySelector("span").style.display = 'none';
                        dropzoneElement.querySelector("i").style.display = 'none';
                    });

                    this.on("removedfile", function(file) {
                        const dropzoneElement = document.querySelector("#main-image-dropzone");
                        if (this.files.length === 0) {
                            dropzoneElement.querySelector("span").style.display = 'block';
                            dropzoneElement.querySelector("i").style.display = 'block';
                        }
                    });
                }
        });

        const thumbnailImageDropzone = new Dropzone("#thumbnail-image-dropzone", {
            url: "/",
            maxFiles: 5,
            maxFilesize: 2,
            acceptedFiles: "image/*",
            dictDefaultMessage: "",
            previewTemplate: `
                    <div class="dz-preview dz-file-preview flex flex-col items-center space-y-2">
                        <img data-dz-thumbnail class="w-24 h-24 object-cover rounded-md border border-gray-300" alt="Uploaded Image"/>
                        <div class="text-gray-600 text-sm truncate w-24 text-center" data-dz-name></div>
                        <div class="text-xs text-gray-500" data-dz-size></div>
                        <div class="dz-progress">
                            <div class="dz-upload bg-blue-500 h-1" data-dz-uploadprogress></div>
                        </div>
                        <button data-dz-remove class="dz-remove w-full text-center text-red-500 text-sm">Remove</button>
                    </div>
                `,
                init: function () {
                    this.on("addedfile", function(file) {
                        if (this.files.length > 5) {
                            this.removeFile(file);
                            const alert = document.getElementById('images-alert');
                            alert.style.display = "block";

                            setTimeout(() => {
                                alert.style.display = "none";
                            }, 5000);
                        }
                        const dropzoneElement = document.querySelector("#thumbnail-image-dropzone");
                        dropzoneElement.querySelector("span").style.display = 'none';
                        dropzoneElement.querySelector("i").style.display = 'none';
                    });

                    this.on("removedfile", function(file) {
                        const dropzoneElement = document.querySelector("#thumbnail-image-dropzone");
                        if (this.files.length === 0) {
                            dropzoneElement.querySelector("span").style.display = 'block';
                            dropzoneElement.querySelector("i").style.display = 'block';
                        }
                    });
                }
        });
    </script>
</x-admin-layout>