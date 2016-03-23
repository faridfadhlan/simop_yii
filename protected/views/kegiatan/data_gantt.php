<?php header('Content-Type: application/javascript'); ?>

var demo_tasks = {
    "data" : [
        <?php foreach($data as $k): ?>
        {
            "id": "<?php echo $k['parent']==NULL?('1000'.$k['id']):$k['id'];?>",
            "text": "<a href='#' class='link'><?php echo $k['text'];?></a>",
            "start_date": "<?php echo $k['start_date'];?>",
            "duration": "<?php echo $k['duration'];?>",
            "progress": <?php echo $k['progress'];?>,
            "target": 100,
            <?php echo ($k['parent']==NULL)?'type:gantt.config.types.project,':'';?>
            <?php echo ($k['parent']!==NULL)?('"parent":1000'.$k['parent'].','):'';?>
            <?php echo ($k['open']!==NULL)?('"open":true'):'';?>
        },
        <?php endforeach; ?>
    ]
}