<?php
namespace ControlCodeJsonSwitch\Listeners;

use Cake\Event\EventListenerInterface;

class JsonRendererListener implements EventListenerInterface
{
    public function implementedEvents()
    {
        return [
            "Controller.beforeRender" => "responseJson"
        ];
    }

    public function responseJson($event) {
        $viewVars = $event->getSubject()->viewVars;
        array_walk_recursive($viewVars, function(&$value, $key) {
            if (is_string($value)) {
                $value = iconv('windows-1252', 'utf-8', $value);
            }
        });
        if(isset($_GET["json"])) {
            header('Access-Control-Allow-Origin: *');
            header('Content-type: application/json');
            echo json_encode($viewVars);
            die();
        }
        if(isset($_GET["ldjson"])) { ?>
            <script type="application/ld+json">
            <?php echo json_encode($viewVars); ?>
            </script>
            <?php die();
        }
    }
} 