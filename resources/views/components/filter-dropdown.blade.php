<div class="relative w-full sm:w-44">
    <button onclick="toggleDropdown()" id="filterDropdownBtn"
        class="w-full flex justify-between items-center px-3 py-2 border border-orange-200 rounded-lg bg-gray-50 hover:bg-gray-100 focus:outline-none text-sm shadow-sm transition">
        <span>Filter</span>
        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </button>
    <div id="filterDropdown"
        class="absolute left-0 w-full mt-3 bg-white border border-orange-200 rounded-lg shadow-lg z-10 opacity-0 -translate-y-2 pointer-events-none transition-all duration-200 ease-out">
        <div class="p-2 max-h-48 overflow-y-auto text-sm">
            <label class="flex items-center mb-1"><input type="checkbox" class="typeCheckbox" value="iPhone 16 ProMax"
                    onchange="filterProducts()"> <span class="ml-2">iPhone 16 ProMax</span></label>
            <label class="flex items-center mb-1"><input type="checkbox" class="typeCheckbox" value="iPhone 16 Pro"
                    onchange="filterProducts()"> <span class="ml-2">iPhone 16 Pro</span></label>
            <label class="flex items-center mb-1"><input type="checkbox" class="typeCheckbox" value="iPhone 16 Plus"
                    onchange="filterProducts()"> <span class="ml-2">iPhone 16 Plus</span></label>
            <label class="flex items-center mb-1"><input type="checkbox" class="typeCheckbox" value="iPhone 16"
                    onchange="filterProducts()"> <span class="ml-2">iPhone 16</span></label>
            <label class="flex items-center mb-1"><input type="checkbox" class="typeCheckbox" value="iPhone 16e"
                    onchange="filterProducts()"> <span class="ml-2">iPhone 16e</span></label>
            <label class="flex items-center mb-1"><input type="checkbox" class="typeCheckbox" value="iPhone 15 ProMax"
                    onchange="filterProducts()"> <span class="ml-2">iPhone 15 ProMax</span></label>
            <label class="flex items-center mb-1"><input type="checkbox" class="typeCheckbox" value="iPhone 15 Pro"
                    onchange="filterProducts()"> <span class="ml-2">iPhone 15 Pro</span></label>
            <label class="flex items-center mb-1"><input type="checkbox" class="typeCheckbox" value="iPhone 15 Plus"
                    onchange="filterProducts()"> <span class="ml-2">iPhone 15 Plus</span></label>
            <label class="flex items-center mb-1"><input type="checkbox" class="typeCheckbox" value="iPhone 15"
                    onchange="filterProducts()"> <span class="ml-2">iPhone 15</span></label>
            <label class="flex items-center mb-1"><input type="checkbox" class="typeCheckbox" value="iPhone 14 ProMax"
                    onchange="filterProducts()"> <span class="ml-2">iPhone 14 ProMax</span></label>
            <label class="flex items-center mb-1"><input type="checkbox" class="typeCheckbox" value="iPhone 14 Pro"
                    onchange="filterProducts()"> <span class="ml-2">iPhone 14 Pro</span></label>
            <label class="flex items-center mb-1"><input type="checkbox" class="typeCheckbox" value="iPhone 14 Plus"
                    onchange="filterProducts()"> <span class="ml-2">iPhone 14 Plus</span></label>
            <label class="flex items-center mb-1"><input type="checkbox" class="typeCheckbox" value="iPhone 14"
                    onchange="filterProducts()"> <span class="ml-2">iPhone 14</span></label>
            <label class="flex items-center mb-1"><input type="checkbox" class="typeCheckbox" value="iPhone 13 ProMax"
                    onchange="filterProducts()"> <span class="ml-2">iPhone 13 ProMax</span></label>
            <label class="flex items-center mb-1"><input type="checkbox" class="typeCheckbox" value="iPhone 13 Pro"
                    onchange="filterProducts()"> <span class="ml-2">iPhone 13 Pro</span></label>
            <label class="flex items-center mb-1"><input type="checkbox" class="typeCheckbox" value="iPhone 13"
                    onchange="filterProducts()"> <span class="ml-2">iPhone 13</span></label>
            <label class="flex items-center mb-1"><input type="checkbox" class="typeCheckbox" value="iPhone 13 Mini"
                    onchange="filterProducts()"> <span class="ml-2">iPhone 13 Mini</span></label>
            <label class="flex items-center mb-1"><input type="checkbox" class="typeCheckbox" value="iPhone 12 ProMax"
                    onchange="filterProducts()"> <span class="ml-2">iPhone 12 ProMax</span></label>
            <label class="flex items-center mb-1"><input type="checkbox" class="typeCheckbox" value="iPhone 12 Pro"
                    onchange="filterProducts()"> <span class="ml-2">iPhone 12 Pro</span></label>
            <label class="flex items-center mb-1"><input type="checkbox" class="typeCheckbox" value="iPhone 12"
                    onchange="filterProducts()"> <span class="ml-2">iPhone 12</span></label>
            <label class="flex items-center mb-1"><input type="checkbox" class="typeCheckbox" value="iPhone 12 Mini"
                    onchange="filterProducts()"> <span class="ml-2">iPhone 12 Mini</span></label>
            <label class="flex items-center mb-1"><input type="checkbox" class="typeCheckbox" value="iPhone 11 ProMax"
                    onchange="filterProducts()"> <span class="ml-2">iPhone 11 ProMax</span></label>
            <label class="flex items-center mb-1"><input type="checkbox" class="typeCheckbox" value="iPhone 11 Pro"
                    onchange="filterProducts()"> <span class="ml-2">iPhone 11 Pro</span></label>
            <label class="flex items-center mb-1"><input type="checkbox" class="typeCheckbox" value="iPhone 11"
                    onchange="filterProducts()"> <span class="ml-2">iPhone 11</span></label>
            <label class="flex items-center mb-1"><input type="checkbox" class="typeCheckbox" value="iPhone Xs Max"
                    onchange="filterProducts()"> <span class="ml-2">iPhone Xs max</span></label>
            <label class="flex items-center mb-1"><input type="checkbox" class="typeCheckbox" value="iPhone Xs"
                    onchange="filterProducts()"> <span class="ml-2">iPhone Xs</span></label>
            <label class="flex items-center mb-1"><input type="checkbox" class="typeCheckbox" value="iPhone X"
                    onchange="filterProducts()"> <span class="ml-2">iPhone X</span></label>

        </div>
        <div class="px-2 pb-2">
            <button onclick="resetFilter()"
                class="w-full mt-2 px-2 py-1 bg-gray-200 hover:bg-gray-300 text-gray-800 rounded text-xs">Reset
                Filter</button>
        </div>
    </div>

    <script>
        function toggleDropdown() {
            const dropdown = document.getElementById('filterDropdown');
            dropdown.classList.toggle('opacity-0');
            dropdown.classList.toggle('-translate-y-2');
            dropdown.classList.toggle('pointer-events-none');
        }

        document.addEventListener('click', function(event) {
            const dropdown = document.getElementById('filterDropdown');
            const btn = document.getElementById('filterDropdownBtn');
            if (!dropdown.contains(event.target) && !btn.contains(event.target)) {
                dropdown.classList.add('opacity-0');
                dropdown.classList.add('-translate-y-2');
                dropdown.classList.add('pointer-events-none');
            }
        });


        function filterProducts() {
            const input = document.getElementById('searchInput');
            const filter = input.value.toLowerCase();
            const grid = document.getElementById('productGrid');
            const items = grid.getElementsByTagName('a');
            const checkedTypes = Array.from(document.querySelectorAll('.typeCheckbox:checked')).map(cb => cb.value);
            Array.from(items).forEach(item => {
                const name = item.textContent.toLowerCase();
                const typeSpan = item.querySelector('span');
                const type = typeSpan ? typeSpan.textContent : '';
                const typeMatch = checkedTypes.length === 0 || checkedTypes.includes(type);
                const searchMatch = name.includes(filter);
                item.style.display = (typeMatch && searchMatch) ? '' : 'none';
            });
        }

        function resetFilter() {
            document.querySelectorAll('.typeCheckbox').forEach(cb => cb.checked = false);
            filterProducts();
        }
    </script>
