@foreach($result as $row)
    <?php
    $imgs = json_decode($row->image_url);
    $img = count($imgs)>0?$imgs[0]:'#';
    ?>
    <tr>
        <td>{{ \App\Models\ECBackend\ItemBrand::getTitle($row->brand_id) }}</td>
        <td>
            <a href="{{ url("detail/{$row->id}") }}"> {{ $row->title }}</a>
        </td>
        <td>{{ \App\Models\ECBackend\ItemCategory::getTitle($row->category_id) }}</td>
        <td>{{ $row->start_price }}</td>
        <td>{{ $row->promotion_price }}</td>
        <td>
            <a href="{{ asset("uploads/files/$img") }}"><img src="{{ asset("uploads/files/tmp2/$img") }}" width="auto" height="40px"></a>
        </td>
        <td>{{ $row->status==1?'Active':'Inactive' }}</td>
    </tr>
@endforeach