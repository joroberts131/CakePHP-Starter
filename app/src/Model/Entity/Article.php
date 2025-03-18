<?php
// src/Model/Entity/Article.php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;
// the Collection class
use Cake\Collection\Collection;
class Article extends Entity
{
    // add this use statement right below the namespace declaration to import


// Update the accessible property to contain `tag_string`
// protected array $_accessible = [
//     //other fields...
//     'tag_string' => true
// ];

protected function _getTagString()
{
    if (isset($this->_fields['tag_string'])) {
        return $this->_fields['tag_string'];
    }
    if (empty($this->tags)) {
        return '';
    }
    $tags = new Collection($this->tags);
    $str = $tags->reduce(function ($string, $tag) {
        return $string . $tag->title . ', ';
    }, '');

    return trim($str, ', ');
}
    // protected array $_accessible = [
    //     'user_id' => true,
    //     'title' => true,
    //     'slug' => true,
    //     'body' => true,
    //     'published' => true,
    //     'created' => true,
    //     'modified' => true,
    //     'user' => true,
    //     'tags' => true,
    // ];
}