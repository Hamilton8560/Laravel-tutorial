<div class="p-6 bg-white rounded-lg shadow-sm">
    <h3 class="text-lg font-semibold mb-4">Live Counter</h3>
    
    <div class="flex items-center space-x-4">
        <button 
            wire:click="decrement" 
            class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600 transition"
        >
            -
        </button>
        
        <span class="text-2xl font-bold">{{ $count }}</span>
        
        <button 
            wire:click="increment"
            class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600 transition"
        >
            +
        </button>
    </div>
</div>