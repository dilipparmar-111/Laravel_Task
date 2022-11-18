<table class="table table-striped table-hover text-center">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Parent_id</th>
        <th>Position</th>
        <th>Status</th>
        <th>Image</th>
        <th>Translations</th>
        <th>Created_at</th>
        <th>Updated_at</th>
        <th>Add Button</th>
    </tr>
    @foreach($categories as $category)
        <tr>
            <td class="text-center">{{$category['id']}}</td>
            <td class="text-center">{{$category['name']}}</td>
            <td class="text-center">{{$category['parent_id']}}</td>
            <td class="text-center">{{$category['position']}}</td>
            <td class="text-center">{{$category['status']}}</td>
            <td class="text-center">
                <img src="{{asset('storage/images/'.$category['image'])}}" style="width: 50px; height: 50px;"
                     alt="user">
            </td>
            <td class="text-center">@if(in_array($category['translations'],old('translations',[]))) @endif</td>
            <td class="text-center">{{$category['created_at']}}</td>
            <td class="text-center">{{$category['updated_at']}}</td>
            <td>
                <form action="{{route('api_data.store')}}" method="post">
                    @csrf
                    <input type="hidden" value="{{$category['id']}}" name="id">
                    <input type="hidden" value="{{$category['name']}}" name="name">
                    <input type="hidden" value="{{$category['parent_id']}}" name="parent_id">
                    <input type="hidden" value="{{$category['position']}}" name="position">
                    <input type="hidden" value="{{$category['status']}}" name="status">
                    <input type="hidden" value="{{$category['image']}}" name="image">
                    <input type="hidden" value="@if(in_array($category['translations'],old('translations',[]))) @endif" name="translations">
                    <input type="hidden" value="{{$category['created_at']}}" name="created_at">
                    <input type="hidden" value="{{$category['updated_at']}}" name="updated_at">
                    <button type="submit" class="btn btn-success btn-sm">Add</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>


