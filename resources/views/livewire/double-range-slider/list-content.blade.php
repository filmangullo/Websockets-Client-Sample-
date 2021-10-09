



<div class="py-8">
    <div class="mb-8" wire:ignore x-data x-init="
        $('#js-range-slider').ionRangeSlider({
            skin: 'round',
            type: 'double',
            grid: false,
            min: 1,
            max: 10000000,
            prefix: 'Rp.',
            onFinish: function(data) {
                @this.set('range', { 'from': data.from, 'to': data.to })
            }
        });
    ">
        <input type="text" id="js-range-slider" class="js-range-slider" />
    </div>

    <div class="flex justify-between mb-18">
        <div>
            <input wire:model="range.from" min="1" maxlength="8" type="number" class="block w-full px-3 py-2 placeholder-gray-400 border border-gray-300 shadow-sm appearance-none focus:ring-0 focus:border-gray-300 focus:outline-none sm:text-base" />
        </div>
        <div>
            <input wire:model="range.to" min="1" maxlength="8" type="number" class="block w-full px-3 py-2 placeholder-gray-400 border border-gray-300 shadow-sm appearance-none focus:ring-0 focus:border-gray-300 focus:outline-none sm:text-base" />
        </div>
    </div>

    <div class="top-5 mt-10">
        <button wire:click="save" class="w-full bg-blue-400 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
           Save
       </button>
     </div>



</div>
