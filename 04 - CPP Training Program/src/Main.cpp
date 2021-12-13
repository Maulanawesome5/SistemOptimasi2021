#include <iostream>
#include <cmath>

using namespace std;

int main(int argc, char const *argv[])
{
    /*                   A    B    C    D    E
      Expected Return = 15%, 25%, 10%, 35%, 15%
      Standar Deviasi = 35%, 15%, 45%, 45%, 50%
    */

    float expReturn[5];
    expReturn[0] = 15;
    expReturn[1] = 25;
    expReturn[2] = 10;
    expReturn[3] = 35;
    expReturn[4] = 15;

    float stdDeviasi[5];
    stdDeviasi[0] = 35;
    stdDeviasi[1] = 15;
    stdDeviasi[2] = 45;
    stdDeviasi[3] = 45;
    stdDeviasi[4] = 50;

    cout << "Standar Deviasi A = " << stdDeviasi[0] << endl;
    

    //Deklarasi variabel untuk varians dan standar deviasi
    float varians['E'];
    varians['A'] = (stdDeviasi[0]) * (stdDeviasi[0]) / 100;
    varians['B'] = (stdDeviasi[1]) * (stdDeviasi[1]) / 100;
    varians['C'] = (stdDeviasi[2]) * (stdDeviasi[2]) / 100;
    varians['D'] = (stdDeviasi[3]) * (stdDeviasi[3]) / 100;
    varians['E'] = (stdDeviasi[4]) * (stdDeviasi[4]) / 100;
    

    /*
        10 Kombinasi Portofolio Saham
             1      2      3      4      5      6      7      8      9     10
        wA 0.20 | 0.44 | 0.23 | 0.18 | 0.24 | 0.24 | 0.03 | 0.24 | 0.20 | 0.10
        wB 0.24 | 0.19 | 0.30 | 0.26 | 0.19 | 0.42 | 0.01 | 0.11 | 0.16 | 0.29
        wC 0.17 | 0.20 | 0.22 | 0.01 | 0.14 | 0.21 | 0.17 | 0.26 | 0.09 | 0.00
        wD 0.13 | 0.01 | 0.04 | 0.34 | 0.17 | 0.03 | 0.45 | 0.16 | 0.34 | 0.26
        wE 0.26 | 0.17 | 0.21 | 0.22 | 0.26 | 0.10 | 0.33 | 0.25 | 0.21 | 0.35
    */
    
    float wA[10] = {0.20, 0.44, 0.23, 0.18, 0.24, 0.24, 0.03, 0.24, 0.20, 0.10};
    for (int i = 0; i < 10; i++){
        cout << "Nilai Weight A [" << i << "] = " << wA[i] << endl;
    }
    
    float wB[10] = {0.24, 0.19, 0.30, 0.26, 0.19, 0.42, 0.01, 0.11, 0.16, 0.29};
    float wC[10] = {0.17, 0.20, 0.22, 0.01, 0.14, 0.21, 0.17, 0.26, 0.09, 0.00};
    float wD[10] = {0.13, 0.01, 0.04, 0.34, 0.17, 0.03, 0.45, 0.16, 0.34, 0.26};
    float wE[10] = {0.26, 0.17, 0.21, 0.22, 0.26, 0.10, 0.33, 0.25, 0.21, 0.35};   
   
    // Standar Deviasi Batas Bawah
    // ((variansA*wA*wA) + (variansB*wB*wB) + (2*wA*wB*stdDevA*stdDevB*(-1)))^0.5;
/*
    double limitDeviasiBawah = ((varians['A']*wA*wA) + (varians['B']*wB*wB) + (2*wA*wB*stdDeviasi[0]*stdDeviasi[1]*(-1)));
    double deviasiBawah = pow(limitDeviasiBawah, 0.5);
    cout << "Batas Deviasi Bawah " << deviasiBawah << endl;

    //Standar Deviasi Batas Atas
    double limitDeviasiAtas = ((variansA*wA*wA) + (variansB*wB*wB) + (2*wA*wB*stdDevA*stdDevB*(1)));

    //Standar Deviasi Optimum
    double DeviasiOptimum = ((variansA*wA*wA) + (variansB*wB*wB) + (2*wA*wB*stdDevA*stdDevB*(1)));

    //Expected Return Portfolio
    double expReturnPortfolio;
*/

    return 0;
}

/*
Isi dari Library Cmath --> www.cppreference.com
ceil(x)   --> Pembulatan ke atas
cos(x)    --> Cosinus
exp(x)    --> Eksponen (pangkat)
fabs(x)   --> Nilai absolut dalam float
floor(x)  --> Pembulatan ke bawah
fmod(x)   --> Modulus dalam float
log(x)    --> Logaritma dengan basis natural
log10(x)  --> Logaritma dengan basis 10
pow(x,y)  --> Power, X pangkat Y
sin(x)    --> Sinus
sqrt(x)   --> Square root, Akar Kuadrat
tan(x)    --> Tangent
*/