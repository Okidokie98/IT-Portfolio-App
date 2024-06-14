@if (session('status'))
    {{-- status messages are for auth and password messages --}}
    <div class="notification is-success">
        <button class="delete"></button>
        {{ session('status') }}
    </div>
@endif
@if(session('info'))
    <div class="notification is-info">
        <button class="delete"></button>
        {{ session('info') }}
    </div>
@endif
@if(session('success'))
    <div class="alert alert-success" id="success-alert"
         style="background-color: green; color: white; padding: 10px; margin-bottom: 20px; position: relative;">
        {{ session('success') }}
        <button type="button" onclick="document.getElementById('success-alert').style.display='none'"
                style="position: absolute; top: 5px; right: 10px; background: none; border: none; color: white; font-size: 16px; cursor: pointer;">
            &times;
        </button>
    </div>
@endif
@if(session('warning'))
    <div class="notification is-warning">
        <button class="delete"></button>
        {{ session('warning') }}
    </div>
@endif
@if(session('danger'))
    <div class="notification is-danger">
        <button class="delete"></button>
        {{ session('danger') }}
    </div>
@endif
