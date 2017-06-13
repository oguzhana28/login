<div id="Container">
   <?php if ($_SESSION['role'] == "student"){ ?>
   <h1>Exams</h1>
   
    <div class="examList">
       <a href="<?= URL ?>admin/createExam">create</a>
        <table>
            <thead style="background-color: #ddd; font-weight: bold;">
                <tr>
                    <td class="header">Id</td>
                    <td class="header">Firstname</td>
                    <td class="header">Lastname</td>
                    <td class="header">Studentnumber</td>
                    <td class="header">edit</td>
                    <td class="header">delete</td>
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
    <?php }else if ($_SESSION['role'] == "teacher"){ ?>
   <h1>students</h1>
   <?php } ?>

</div>