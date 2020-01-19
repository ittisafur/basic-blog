<aside class="menu">
    <p class="menu-label">Post Information</p>
    <ul class="menu-list">
        <li><a href="{{route('account.post.create')}}">Create a Post</a></li>
    </ul>
    
    <p class="menu-label">Account Information</p>
    <ul class="menu-list">
        <li><a href="{{route('account.edit', auth()->user()->name)}}">Update Your Account</a></li>
        <li><a href="{{route('account.detail', auth()->user()->name)}}">Your Details</a></li>
    </ul>

</aside>