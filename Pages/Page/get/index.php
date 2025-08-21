<?php
Utphpcore\Data\Cache::get(\Utphpcore\Core::Xhtml) -> get('body/div@.container', function(\Utphpcore\GUI\NoHtml\Xhtml $container)
{
    $rowContainer = $container -> add('div@.row');

    $appDbc = Utphpcore\IO\Data\Db\Database::getInstance('App'); /* @var $appDbc Utphpcore\IO\Data\Db\Database */
    $appDbc -> query('select '
            . '`cards`.`id`, '
            . '`cards`.`name`, '
            . '`cards`.`description`, '
            . '`card-links`.`text`, '
            . '`card-links`.`url` '
        . 'from `cards`'
        . 'inner join `card-links` on '
            . '`card-links`.`card-id` = `cards`.`id`');
    $result = $appDbc -> execute();
    
    $buffer = [];
    foreach($result['aResults'] as $row)
    {
        $id = $row['id'];
        if(!isset($buffer[$id]))
        {
            $buffer[$id] = [
                'name' => $row['name'],
                'description' => $row['description'],
                'links' => []
            ];
        }
        $buffer[$id]['links'] = [
            $row['text'] => $row['url']
        ];
    }
    
    foreach($buffer as $entry)
    {
        new \Utphpcore\GUI\NoHtml\Materialize\Card(
            $rowContainer, 
            $entry['name'], 
            $entry['description'],
            \Utphpcore\Data\Collections\KeyValuePair::fromArray($entry['links'])
        );
    }
});