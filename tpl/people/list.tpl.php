<?php include "{$tpl_path}/_newhead.php" ?>

<link rel="stylesheet" href="<?=$static_path?>/css/base.css">

<div class="col-md-12">
    <section class="col-md-12">
        <div class="bg-primary-lighter" style="padding: 20px;margin-top: 30px;margin-bottom: 20px;text-align: left;">
            <form class="form-horizontal" action="/people/list" method="get" class="pr">
                <div class="form-group mt10">
                    <label class="control-label col-md-1">姓名</label>
                    <div class="col-md-3">
                        <input class="form-control" type="text" name="doctor_name" value="" placeholder="医生姓名模糊搜索" />
                    </div>
                    <label class="control-label col-md-1">武学</label>
                    <div class="col-md-3">
                        <input class="form-control" type="text" name="doctor_name" value="" placeholder="医生姓名模糊搜索" />
                    </div>
                </div>
                <div class="form-group mt10">
                    <label class="control-label col-md-1">诗号</label>
                    <div class="col-md-3">
                        <input class="form-control" type="text" name="doctor_name" value="" placeholder="医生姓名模糊搜索" />
                    </div>
                    <label class="control-label col-md-1">等级</label>
                    <div class="col-md-3">
                        <select class="form-control" id="level" name="level" size="1">
                            <option value="-1">全部</option>
                            <option value="0">超先天</option>
                            <option value="1">先天</option>
                            <option value="2">一流高手</option>
                            <option value="3">二流高手</option>
                        </select>
                    </div>
                </div>
                <div class="mt10">
                    <input style="margin-left: 50px;" type="submit" class="btn btn-success" value="组合筛选" />
                </div>
            </form>
        </div>

        <div class="block">
            <div class="block-content">
                <button class="btn btn-sm btn-primary" style="margin-bottom: 10px;" data-type="add" data-toggle="modal" data-target="#people-edit" type="button">
                    <i class="fa fa-plus push-5-r"></i>添加人物
                </button>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 50px;">id</th>
                            <th>createtime</th>
                            <th class="hidden-xs" style="width: 15%;">updatetime</th>
                            <th class="text-center" style="width: 100px;">name</th>
                            <th class="text-center" style="width: 100px;">level</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($list as $a) {
                            ?>
                            <tr>
                                <td class="text-center"><?=$a->id?></td>
                                <td><?=$a->createtime?></td>
                                <td class="hidden-xs">
                                    <span class="label label-info"><?=$a->updatetime?></span>
                                </td>
                                <td class="text-center"><?=$a->name?></td>
                                <td class="text-center"><?=$a->level?></td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button class="btn btn-xs btn-default" data-id="<?=$a->id?>" data-name="<?=$a->name?>" data-toggle="modal" data-type="modify" data-target="#people-edit" type="button" data-original-title="Edit Client"><i class="fa fa-pencil"></i></button>
                                        <button class="btn btn-xs btn-default dc_project-delete" type="button" data-dc_doctorprojectid="<?=$a->id?>" ><i class="fa fa-times"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- 添加 模态框 -->
        <div class="modal" id="people-edit" tabindex="-1" role="dialog" aria-hidden="true" style="display: none; padding-right: 17px;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="block block-themed block-transparent remove-margin-b">
                        <div class="block-header bg-primary">
                            <ul class="block-options">
                                <li>
                                    <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                                </li>
                            </ul>
                            <h3 class="block-title">添加人物</h3>
                        </div>
                        <div class="block-content">
                            <input type="hidden" id="type" name="type" value="">
                            <div class="form-group">
                                <label class="" for="content">id</label>
                                <div class="parentCls">
                                    <input class="form-control" type="text" id="id" name="id" placeholder="请输入id">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="" for="content">姓名</label>
                                <div class="parentCls">
                                    <input class="form-control" type="text" id="name" name="name" placeholder="请输入姓名">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">关闭</button>
                        <button class="btn btn-sm btn-primary" type="button" id="submit-people" data-dismiss="modal"><i class="fa fa-check"></i>提交</button>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>

<script>
    $(function () {
        $('#people-edit').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var modal = $(this);

            var type = button.data('type');
            modal.find('#type').val(type);
            if (type == 'modify') {
                var id = button.data('id');
                var name = button.data('name');

                modal.find('#id').val(id);
                modal.find('#name').val(name);
            }
        });

        $('#submit-people').on('click', function () {
            var id = $('#id').val();
            var name = $('#name').val();
            var type = $('#type').val();

            var flag = 0;

            if (id == '') {
                alert("名称不能为空");
            }

            if (name == '') {
                alert("名称不能为空");
            }

            $.ajax({
                url: '/people/addormodifyjson',
                type: 'post',
                dataType: 'text',
                async: false,
                data: {
                    id: id,
                    name: name,
                    type: type
                },
                "success": function (data) {
                    if (data == 'add-success') {
                        alert("添加成功");
                        flag = 1;
                    } else if (data == 'modify-success') {
                        alert("修改成功");
                        flag = 1;
                    } else {
                        alert(data);
                    }
                }
            });

            if (flag == 0) {
                return false;
            }

            window.location.href = window.location.href;
        });

        $('.dc_project-delete').on('click', function(){
            var me = $(this);
            var dc_projectid = me.data('dc_projectid');
            var title = me.data('title');
            var doctorprojectcnt = me.data('doctorprojectcnt');

            if (doctorprojectcnt > 0) {
                alert("该组还有患者,不能删除！");
                return false;
            }

            if (false == confirm("确认删除[" + title  + "]吗?")) {
                return false;
            }

            $.ajax({
                url: '/dc_projectmgr/deletejson',
                type: 'get',
                dataType: 'text',
                data: {
                    dc_projectid: dc_projectid
                },
                "success": function (data) {
                    if (data == 'success') {
                        $("#dc_project-" + dc_projectid).remove();
                        alert("删除成功");
                    } else if (data == 'fail') {
                        alert("该项目还有医生项目,不能删除！")
                    }
                }
            });
        });
    });
</script>

<?php include "{$tpl_path}/_newfooler.php" ?>