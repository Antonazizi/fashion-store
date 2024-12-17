<x-admin-layout>
    <div class="settings-container md:pl-10 max-w-screen-sm mt-12 md:mt-0 text-sm">
        <h2 class="text-lg font-semibold text-gray-600 mb-8">Settings</h2>

        <form id="update-logo-form" method="POST" action="" enctype="multipart/form-data" class="mb-8">
            @csrf
            <div class="mb-4">
                <label for="logo" class="block text-gray-700 font-semibold mb-2">Site Logo</label>
                
                <div class="mb-4">
                    <img 
                        src="{{ asset('images/icons/logo.png') }}" 
                        alt="Current Logo" 
                        class="w-32 h-auto border p-2 border-gray-300 rounded-md mb-4">
                </div>
    
                <input 
                    type="file" 
                    name="logo" 
                    id="logo" 
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-200"
                    accept="image/*"
                    required>
            </div>
            <a 
                class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 cursor-pointer">
                Update Logo
            </a>
        </form>
        
        <form id="update-password-form" method="POST" action="" class="text-sm">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-semibold mb-2">Admin Email</label>
                <input 
                    type="email" 
                    name="email" 
                    id="email" 
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-200"
                    value="" 
                    required>
            </div>
            <div class="mb-4">
                <label for="current_password" class="block text-gray-700 font-semibold mb-2">Current Password</label>
                <input 
                    type="password" 
                    name="current_password" 
                    id="current_password" 
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-200"
                    required>
            </div>
            <div class="mb-4">
                <label for="new_password" class="block text-gray-700 font-semibold mb-2">New Password</label>
                <input 
                    type="password" 
                    name="new_password" 
                    id="new_password" 
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-200"
                    required>
            </div>
            <div class="mb-4">
                <label for="new_password_confirmation" class="block text-gray-700 font-semibold mb-2">Confirm New Password</label>
                <input 
                    type="password" 
                    name="new_password_confirmation" 
                    id="new_password_confirmation" 
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-200"
                    required>
            </div>
            <a 
                class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 cursor-pointer">
                Update Password
            </a>
        </form>
    </div>
    
</x-admin-layout>