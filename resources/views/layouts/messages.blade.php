@if(Session('success'))
<div class="flex justify-center py-2 bg-indigo-900 text-white" id="status-message">
    <p>{{Session('success')}}</p>
</div>
@endif
