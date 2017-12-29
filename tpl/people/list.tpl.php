<?php include "{$tpl_path}/_newhead.php" ?>

<link rel="stylesheet" href="<?=$static_path?>/css/base.css">

<div class="col-md-12">
    <section class="col-md-12">
        <div class="bg-primary-lighter" style="padding: 20px;margin-top: 30px;margin-bottom: 20px;text-align: left;">
            <form class="form-horizontal" action="/doctormgr/list" method="get" class="pr">
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
                    <label class="control-label col-md-1">立场</label>
                    <div class="col-md-3">
                        <select class="form-control" id="example-select" name="example-select" size="1">
                            <option value="0">Please select</option>
                            <option value="1">Option #1</option>
                            <option value="2">Option #2</option>
                            <option value="3">Option #3</option>
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
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center" style="width: 50px;">id</th>
                        <th>createtime</th>
                        <th class="hidden-xs" style="width: 15%;">updatetime</th>
                        <th class="text-center" style="width: 100px;">name</th>
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
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

<?php include "{$tpl_path}/_newfooler.php" ?>