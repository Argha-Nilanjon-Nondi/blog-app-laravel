<div class="absolute top-1 w-full flex justify-center transition-all" id="alert-box">
    <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md w-4/5" role="alert">
        <div class="flex justify-between">
            <div class="flex">
                <div class="py-1 pr-1">
                    <i class="fas fa-check-circle text-4xl"></i>
                </div>
                <div class="flex flex-col justify-center">
                    <p class="font-bold">{{$message}}</p>
                </div>
            </div>
            <button class="mr-2" id="alert-btn"><i class="fas fa-times"></i></button>
        </div>

    </div>
</div>

<script src="{{ asset('js/alert.js') }}"></script>