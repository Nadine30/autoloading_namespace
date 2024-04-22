<?php
namespace Utilisateurs;
use Utilisateurs\User;

class UserManager
{
    protected \PDO $database;

    public function __construct(\PDO $db)
    {
        $this->database = $db;
    }

    public function ajouter(User $user): void 
    {
        $sql= "INSERT INTO Users (email, password) VALUES('$user->email', '$user->password')";
        try
        {
            $this->database->exec($sql);
            echo "Un utilisateur a été créée !";
        }
        catch (Exception $e)
        {
            echo $e->getMessage();
        }
    }

    public function récupérer(int $id): ?User 
    {
        $sql= "SELECT * FROM Users WHERE id= $id LIMIT 1";
        try 
        {
            $stmt =$this->database->query($sql);
            if ($stmt->rowCount() > 0)
            {
                $data = $stmt->fetchAll(\PDO::FETCH_ASSOC)[0];
            }
            else
            {
                return null;
            }
        }
        catch(Exception $e)
            {
                $e->getMessage();
            }
            return new User($data['id'], $data['email'], $data['password']);
    }

    public function modifier(User $user, string $email, string $password): void
    {
        $sql= "UPDATE Users SET email=$email and password=$password WHERE id=$user->id";
        try
        {
            $this->database->exec($sql);
            echo "Les informations de cet Utilisateur ont été mise à jour !";
        }
        catch (Exception $e)
        {
            echo $e->getMessage();
        }
    }

    public function supprimer(int $id): void 
    {
        $sql= "DELETE FROM Users WHERE id=$id";
        try
        {
            $this->database->exec($sql);
            echo "L'utilisateur a été supprimé !";
        }
        catch (Exception $e)
        {
            echo $e->getMessage();
        }
    }

    public function all(): ?User 
    {
        $sql="SELECT * FROM Users";
        try 
        {
            $stmt =$this->database->query($sql);
            if ($stmt->rowCount() > 0)
            {
                $data = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            }
            else
            {
                return null;
            }
        }
        catch(Exception $e)
            {
                $e->getMessage();
            }
            return new User($data['id'], $data['email'], $data['password']);
    }
    
    
}