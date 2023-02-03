@extends('layouts.admin')

@section('contents')
 

<div class="container">
    <div class="wrap">
        <div class="tit_box">
            <p class="tit">상담신청현황</p>
        </div>
        <div class="row-2">
            <div class="row-1-btn">
                <button type="button" onclick="destroy()">삭제</button>
            </div>
        </div>
        <div class="cont">
            <table>
                <tbody>
                    <tr class="table-row-1">
                        <th class="check">
                            <input type="checkbox" name="animal" value="selectall" onclick="selectAll(this)">
                        </th>
                        <th>상담유형</th>
                        <th>프로젝트</th>
                        <th>업체명</th>
                        <th>작성일</th>
                        <th>연락처</th>
                    </tr>
                    @foreach($Contacts as $item)
                    <tr class="table-row-2">
                        <th class="check">
                            <input type="checkbox" name="check_id[]" value="{!! $item->id !!}">
                        </th>
                        <th><a href="detail__contact/{!!$item -> id!!}">{{$item -> type}}</a></th>
                        <th>{{$item -> project}}</th>
                        <th>{{$item -> cname}}</th>
                        <th>{{$item -> created_at}}</th>
                        <th>{{$item -> phone}}</th>
                    </tr>
                    @endforeach
                    <!-- <tr class="table-row-2">
                        <th class="check"><input type="checkbox"></th>
                        <th><a href="simple__contact">간편</a></th>
                        <th>Web</th>
                        <th>로떼</th>
                        <th>2022.02.02</th>
                        <th>미완료</th>
                    </tr> -->
                </tbody>
            </table>
        </div>
    </div>
</div>
<script  src="http://code.jquery.com/jquery-latest.min.js"></script>
<script>
    function destroy(){
        var checkArray = new Array();

        $("input[name='check_id[]']:checked").each(function() {
            checkArray.push( $(this).val());
        })

        var objParams = {
            "check_id" : checkArray,
        };
        $.ajax({
            type: 'GET',
            url: '{{ route('contacts_delete') }}',
            dataType: 'json',
            data: objParams,
            success: function(data) {
                if(data==200){
                    window.location.reload();
                }
            },
            error: function(data) {
                console.log("error" +data);
            }

        });
    }
    // var innerText = document.querySelector('.check-ok').innerText;
    function selectAll(selectAll)  {
        const checkboxes
            = document.getElementsByName('check_id[]');

        checkboxes.forEach((checkbox) => {
            checkbox.checked = selectAll.checked;
        })
    }
</script>



@endsection