#include <iostream>
#include <string>

using namespace std;

class Weapon{
    private:
        string weaponName;
        float damage;
        float manaWeapon;
    
    public:
        Weapon(const char* name, float damage, float mana){
            this->weaponName = name;
            this->damage = damage;
            this->manaWeapon = mana;
        }

        void weaponInfo(){
            cout << "Weapon " << this->weaponName << endl;
            cout << "DP " << this->damage << " MP " << this->manaWeapon << endl;
        }

        string weaponName(){
            return this->weaponName;
        }

};

class Hero{
    private:
        string name;
        int level;
        int healthPoint;
        long expPoint;

        //Class member
        Weapon* weapon;
    
    public:
        Hero(const char* name, int level, int healthPoint, long exp){
            this->name = name;
            this->level = level;
            this->healthPoint = healthPoint;
            this->expPoint = exp;
        }

        void displayHero(){
            cout << "Hero name " << this->name << ", Lv." << this->level << endl;
            cout << "HP: " << this->healthPoint << " %" << endl;
            cout << "EXP : " << this->expPoint << endl << endl;
            cout << "Equipped weapon -> " << this->weapon->weaponInfo();
        }

        void getName(){
            cout << "Hello Master, i'am your servant !" << endl;
            cout << "My name " << this->name << endl;
        }

        void equipWeapon(Weapon* weapon){
            this->weapon = weapon;
            cout << "Servant " << this->name << " using weapon " << weapon << endl;
        }

};



int main(int argc, char const *argv[])
{
    Hero hero1 = Hero("Saber", 1, 100, 0);
    hero1.displayHero();
    hero1.getName();
    
    Weapon sword1 = Weapon("Excalibur", 5.25, 100);
    Weapon sword2 = Weapon("Katana", 4.65, 80);
    
    //Implementasi setter untuk equip weapon
    hero1->equipWeapon(sword1);
    
    
    return 0;
}