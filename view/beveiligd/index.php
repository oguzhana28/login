<div class="Page">
    <h1>Exams</h1>
</div>
<div id="Container">
    <div class="examList">
       <a href="<?= URL ?>admin/createExam">create</a>
        <table>
            <thead style="background-color: #ddd; font-weight: bold;">
                <tr>
                    <td class="header">Id</td>
                    <td class="header">Name</td>
                    <td class="header">Price</td>
                    <td class="header">Amount available</td>
                    <td class="header">Edit</td>
                    <td class="header">Delete</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($exams as $exam) { ?>
                    <tr class="stockList">
                        <td class="content">
                            <?= $exam['id']; ?>
                        </td>
                        <td class="content">
                            <?= $exam['name']; ?>
                        </td>
                        <td class="content">
                            <?= $exam['teacher']; ?>
                        </td>
                        <td class="content">
                            <?= $exam['studentnumber']; ?>
                        </td>
                    </tr>
                    <?php } ?>
            </tbody>


        </table>
    </div>
</div>