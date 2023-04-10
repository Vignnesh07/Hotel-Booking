@if(session() -> has('success'))
    @if($admin == 'true')
        <div 
            id="flash-success"
            x-data="{ show: true }" 
            x-init="setTimeout(() => show = false, 4000)" 
            x-show="show" 
            x-transition.opacity
            x-transition:enter.duration.1000ms
            x-transition:leave.duration.1000ms
            x-transition.scale.origin.right
            style="
                position: fixed;
                right: 15px;
                background-color: #deb887c9;
                color: black;
                padding: 10px;
                font-size: smaller;
                border-radius: 12px;
                z-index: 2;
                top: 140px;
            "
        >
            <p>{{ session() -> pull('success') }}</p>
        </div>
    @else 
        <div 
            id="flash-success"
            x-data="{ show: true }" 
            x-init="setTimeout(() => show = false, 4000)" 
            x-show="show" 
            x-transition.opacity
            x-transition:enter.duration.1000ms
            x-transition:leave.duration.1000ms
            x-transition.scale.origin.right
            style="
                position: fixed;
                right: 15px;
                background-color: #deb887c9;
                color: black;
                padding: 10px;
                font-size: smaller;
                border-radius: 12px;
                z-index: 2;
            "
        >
            <p>{{ session() -> pull('success') }}</p>
        </div>
    @endif
@endif

@if(session() -> has('error'))
    @if($admin == 'true')
        <div 
            id="flash-success"
            x-data="{ show: true }" 
            x-init="setTimeout(() => show = false, 4000)" 
            x-show="show" 
            x-transition.opacity
            x-transition:enter.duration.1000ms
            x-transition:leave.duration.1000ms
            x-transition.scale.origin.right
            style="
                position: fixed;
                right: 15px;
                background-color: #ff0000c9;
                color: white;
                padding: 10px;
                font-size: smaller;
                border-radius: 12px;
                z-index: 2;
                top: 140px;
            "
        >
            <p>{{ session() -> pull('error') }}</p>
        </div>
    @else 
        <div 
            id="flash-success"
            x-data="{ show: true }" 
            x-init="setTimeout(() => show = false, 5000)" 
            x-show="show"
            x-transition.opacity
            x-transition:enter.duration.1000ms
            x-transition:leave.duration.1000ms
            x-transition.scale.origin.right
            style="
                position: fixed;
                right: 15px;
                background-color: #ff0000c9;
                color: white;
                padding: 10px;
                font-size: smaller;
                border-radius: 12px;
                z-index: 2;
                font-weight: 900;
            "
        >
            <p>{{ session() -> pull('error') }}</p>
        </div>
    @endif
@endif