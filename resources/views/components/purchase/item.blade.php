@props(['checkout' => false])

<a href="" {{ $attributes->class(['purchase-item']) }}>
    <div class="purchase-item__wrapper">
        <div class="purchase-item__info">
            <div class="purchase-item__image purchase-item-ibg-cover">
                <img src="../images/mock/media.png" alt="media" />
            </div>
            <div class="purchase-item__data purchase-item-data">
                <div class="purchase-item-data__creator">
                    Haris_Shahid
                    <span class="text-primary">(Singer)</span>
                </div>
                <h3 class="purchase-item-data__title">Hollywood Greatest Themes</h3>
                @if ($checkout == false)
                    <div class="purchase-item-data__price">
                        <span class="text-secondary">Price:</span> <b>1.97</b>
                    </div>
                @endif

                <div class="purchase-item-data__type">Collection Audio File</div>
            </div>
        </div>

        @if ($checkout)
            <div class="purchase-item__price">
                <span class="text-secondary">Price:</span> <b>1.97</b>
            </div>
        @else
            <div class="purchase-item__actions">
                <x-ui.button class="purchase-item__button secondary">Add to wishlist</x-ui.button>
                <x-ui.button class="purchase-item__button secondary">Delete</x-ui.button>
            </div>
        @endif


    </div>
</a>
