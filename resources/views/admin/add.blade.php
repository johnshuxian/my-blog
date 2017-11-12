<div class="container">
    <form action="">
        <div class="row">
            <div class="col-sm-10" style="margin-bottom: 10px">
                <input type="text" class="form-control" id="firstname" name="title" placeholder="请输入文章标题">
            </div>
            <div class="col-sm-10">
                <div id="editormd_id" style="height: 100px">
                    <textarea name="content" style="display:none;" cols="10" rows="10"></textarea>
                </div>
            </div>
        </div>
        <div class="col-sm-10">
            <button class="btn btn-primary btn-lg btn-block">提交</button>
        </div>
    </form>
</div>
<script>
    $('button').on('click',function (event) {
        event.preventDefault();
        var data = {};
        var infos = $('form').serializeArray();

        $.each(infos, function () {
            data[this.name] = this.value;
        })

        $.ajax({
            url: "{{ route('article_insert') }}",
            type: 'post',
            dateType: 'json',
            async:true,
            data: {'_token': "{{ csrf_token() }}", 'data': data},
            success: function (msg) {
                if (msg.status == 200) {
                    layer.msg("博文发布成功!");
                } else if (msg.status == 202) {
                    if (msg.error['title']) layer.alert("标题栏长度不得少于5个字符!");
                    if (msg.error['editormd_id-html-code']) layer.alert("博文长度不得少于5个字符!");
                } else {
                    layer.alert(msg.error)
                }
            }
        })
    });
</script>
{!! editor_js() !!}
