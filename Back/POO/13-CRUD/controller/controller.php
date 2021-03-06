<?php

// le fishier controller.php contient toute les actions et les méthodes a executées. Par exemple si Je souhaite afficher des informations 10 par 10, c'est dans ce fichier que l'on fera ce traitement


namespace Controller;

class Controller
    {
       private $db;
       public function __construct()
       {
           $this->db = new \Model\EntityRepository; // autoload voit passer le mot clé 'new' et fait appel au fichier Controller.php  et dans un 2eme temps, dans le controlelr il y a une instance 'new' de EntityRepository, donc l'autoload s'execute et fait appel au fichier EntityRepository

        //    permet de récupérer une connexion à la BDD qui se trouve dans le fichier EntityRepository.php
       }
       public function handlerRequest() // méthode qui permet de définir l'action de l'utilisateur, par exemple, si l'utilisateur veut ajouter un employé, c'est la méthode save() qui s'execute
       {
           $op = isset($_GET['op']) ? $_GET['op'] : NULL; // si 'op' est définit dans l'URL, on le stock dans une variable sinon on stock 'NULL'

           try
           {
                if($op == 'add' || $op == 'update') $this->save($op); // si on ajoute ou modifie un employé, on appel un méthode save()
                elseif($op == 'select') $this->select(); // si on selectionne 1 employé, on fait appel à la méthode select()
                elseif($op == 'delete') $this->delete(); // si on supprime un employé, on fait appel à la méthode delete()

                else $this->selectAll(); //permet d'afficher l'ensemble des employes

           }
           catch(Exception $e)
           {
                die("Problème dans l'action de l'internaute !!!");
           }
       }

       public function delete()
       {
           $id = isset($_GET['id']) ? $_GET['id'] : NULL; // on controle qu'un id a bien été passé dans l'URL et on le stock
           $r = $this->db->delete($id); // on fait aappel à la méthode delete() du fichier EntityRepository.php
           $this->redirect('index.php');
       }

       public function select()
       {
           $id = isset($_GET['id']) ? $_GET['id'] : NULL; // on controle si un id a été envoyé dans l'URL et on le stock dans la variable $id
           $this->render('layout.php', 'details.php', array(
               "title" => "Détail de l'employe ID : $id",
               "donnees" => $this->db->select($id) // on appel la méthode select() du fichier EntityRepository.php
           ));
       }
       
       public function selectAll()
       {
        //    echo 'Methode selectAll !!';
        //    $r = $this->db->selectAll();
        // //    db represente un objet issu de la classe EntityRepository
        // //    db->selectAll() : on pointe sur la méthode selectAll() déclarée sans la classe EntityRepository
        //     echo '<pre>';print_r($r);echo'</pre>';
                $this->render('layout.php', 'donnees.php', array (
                    'title' => 'Toute les données', 
                    'donnees' => $this->db->selectAll(), // on pointe sur la méthode déclarée dans EntityRepository.php

                    // donnees corrcponde à les donnees dans la controller
                    'fields' => $this->db->getFields(), // on pointe sur la méthode déclarée dans EntityRepository.php
                    'id' => 'id' . ucfirst($this->db->table) //affiche idEmployes, cela servira à ponté sur l'indice idEmployes du tableau de données anvoyer dans la layout pour les liens voir/modifier/supprimer
                ));
        }

        public function save($op)
            {
                $title = $op;//permet de récupérer le donnée envoyeé dans l'URL et de la stocké dans $title

                $id = isset($_GET['id']) ? $_GET['id'] : NULL; // permet de controler si y l a un id envoyé dans l'URL, dans ce cas on le stock dans le variable 'id'

                $values = ($op == 'update') ? $this->db->select($id) : ''; // si on a envoyé un id dans l'URL, on l'envoi en argument de la méthode select() de EntityRepository.php, cela permettra de selectionner tout les données de l'employé pour la modification
                
                if($_POST)
                {
                    $r = $this->db->save(); // lorsque l'on valide le formulaire d'ajout, on execute le méthode save() du fichier EntityRepository.php

                    $this->redirect('index.php'); //Une fois la insertion ou modification executée, on redirige vers la page index.php
                }
                $this->render('Layout.php', 'donnees-form.php', array(
                    "title" => "Donnée : $title", 
                    "op" => $op, 
                    "fields" => $this->db->getFields(),
                    "values" => $values //permet de récupérer toute les données de l'employé en cas de modification
                ));
            }

        public function render($layout,$template, $parameters = array())
        {
            extract($parameters); //permet d'avoir les indices du tableau variable
            ob_start(); //commence la temporisation

            require "view/$template";
            //$content =require "view/$template"; this we can't do cuz content is a caracter chaine

            $content = ob_get_clean();// tout se qui se trouve dans la template sera stocké dans $content grace à la fonction ob_get_clean()

            ob_start(); //temporise la sortie d'affichage
            require "view/$layout";

            return ob_end_flush(); //permet de libérer l'affichage et fait tout apparaitre sur la page
        }

        public function redirect($url) //méthode permettant d'effectuer une redicrection aprés modification ou ajout
        {
            header("Location:" . $url);

        }

    }


?>